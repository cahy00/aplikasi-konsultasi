<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LetterInResource\Pages;
use App\Filament\Resources\LetterInResource\RelationManagers;
use App\Models\Employee;
use App\Models\LetterIn;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class LetterInResource extends Resource
{
    protected static ?string $model = LetterIn::class;

    protected static ?string $pluralModelLabel = 'Surat Masuk';
    protected static ?string $navigationGroup = 'Module Arsip Digital';
    protected static ?string $navigationIcon = 'heroicon-o-envelope-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_letter_id')
										->relationship('category_letter', 'name')
                    ->required()
                    ->label('Kategori Surat'),
                Forms\Components\Select::make('departement_id')
										->relationship('departement','name')
                    ->required()
										->reactive()
										->afterStateUpdated(fn($state, callable $set)=>$set('employee_id', null))
                    ->label('Disposisi Surat - Unit'),
								Forms\Components\Select::make('employee_id')
										->relationship('employee','name')
                    ->required()
										->options(function(callable $get){
											$departementId = $get('departement_id');
											if(!$departementId){
												return[];
											}

											return Employee::where('departement_id', $departementId)
											->pluck('name', 'id')->toArray();
										})
                    ->label('Disposisi Surat - Pegawai'),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(50)
										->label('Judul Surat'),
                Forms\Components\TextInput::make('reference_number')
                    ->required()
                    ->unique()
										->label('Nomor Surat'),
                Forms\Components\DatePicker::make('date_letter')
                    ->required()
										->label('Tanggal Surat'),
                Forms\Components\DatePicker::make('date_in')
                    ->required()
										->label('Tanggal Masuk Instansi'),
                Forms\Components\TextInput::make('origin_letter')
                    ->required()
                    ->maxLength(30)
										->label('Asal Surat'),
                Forms\Components\Select::make('properties_letter')
                    ->required()
                    ->options([
											'Biasa' => 'biasa',
											'Rahasia' =>	'rahasia',
											'Penting'	=>	'penting'
										])
										->label('Sifat Surat'),
                Forms\Components\FileUpload::make('file')
                    ->required()
                    ->label('Upload Surat'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category_letter.name')
                    // ->numeric()
                    ->sortable()
										->label('Kategori Surat'),
                Tables\Columns\TextColumn::make('departement.name')
                    ->numeric()
                    ->sortable()
										->label('Disposisi Bidang'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
										->label('Judul Surat'),
                Tables\Columns\TextColumn::make('reference_number')
                    ->numeric()
                    ->sortable()
										->label('Nomor Surat'),
                Tables\Columns\TextColumn::make('date_in')
                    ->date()
                    ->sortable()
										->label('Surat Masuk'),
                Tables\Columns\TextColumn::make('origin_letter')
                    ->searchable()
										->label('Asal Surat'),
                Tables\Columns\TextColumn::make('properties_letter')
                    ->searchable()
										->label('SIfat Surat'),
                Tables\Columns\TextColumn::make('file')
										->formatStateUsing(fn($state)=>$state ? basename($state) :'Tidak ada Data')
										->url(fn($record)=>Storage::url($record->file_path)),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
								SelectFilter::make('departement')
								->label('Unit Kerja')
								->relationship('departement','name'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLetterIns::route('/'),
            'create' => Pages\CreateLetterIn::route('/create'),
            'edit' => Pages\EditLetterIn::route('/{record}/edit'),
        ];
    }
}
