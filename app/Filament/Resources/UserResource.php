<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

		protected static ?string $navigationGroup = 'Manajemen User';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Pengguna')->schema([
									Card::make()->schema([
										TextInput::make('name')
										->label('Nama Lengkap')
											->required(),
										TextInput::make('nip')
										->label('NIP')
										->required()
										->numeric()
										->unique(table:User::class),
										TextInput::make('email')
												->email()
												->required()
												->unique(table:User::class),
										TextInput::make('password')
											->password()
											->required()
											->confirmed()
											->maxLength(255),
										TextInput::make('password_confirmation')
												->password()
												->required()
												->maxLength(255),
										Select::make('roles')
												->label('Role')
												->required()
												->relationship('roles', 'name')
												->multiple()
												->preload(),
									])
								])->columnSpan(1)->columns(2),
								// Section::make('Unit Kerja')->schema([
								// 	Select::make('departement_id')
								// 	->relationship(name:'departements', titleAttribute:'name')
								// 	->label('Unit Kerja')
								// ])->columnSpan(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
								BadgeColumn::make('roles.name')
										->label('Role')
										->colors([
											'primary',
											'success' => 'Admin',
											'warning'	=> 'Penulis',
										])
                // Tables\Columns\TextColumn::make('email_verified_at')
                //     ->dateTime()
                //     ->sortable(),
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
                //
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
