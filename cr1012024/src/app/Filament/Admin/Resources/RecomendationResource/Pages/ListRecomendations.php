<?php

namespace App\Filament\Admin\Resources\RecomendationResource\Pages;

use App\Filament\Admin\Resources\RecomendationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRecomendations extends ListRecords
{
    protected static string $resource = RecomendationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
