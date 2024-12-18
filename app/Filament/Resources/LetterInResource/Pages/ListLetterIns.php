<?php

namespace App\Filament\Resources\LetterInResource\Pages;

use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\LetterInResource;
use App\Models\LetterIn;
use Illuminate\Contracts\Database\Eloquent\Builder;


class ListLetterIns extends ListRecords
{
    protected static string $resource = LetterInResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

		public function getTabs(): array
		{
			return [
				'Semua Pertanyaan' => Tab::make(),
				'Minggu Ini' => Tab::make()
				->modifyQueryUsing(fn(Builder $query) => $query->where('created_at', '>=', now()->subWeek()))
				->badge(LetterIn::query()->where('created_at', '>=', now()->subWeek())->count()),
				'Bulan Ini' => Tab::make()
				->modifyQueryUsing(fn(Builder $query) => $query->where('created_at', '>=', now()->subMonth()))
				->badge(LetterIn::query()->where('created_at', '>=', now()->subMonth())->count()),
				'Tahun Ini' => Tab::make()
				->modifyQueryUsing(fn(Builder $query) => $query->where('created_at', '>=', now()->subYear()))
				->badge(LetterIn::query()->where('created_at', '>=', now()->subYear())->count()),
			];
		}
}
