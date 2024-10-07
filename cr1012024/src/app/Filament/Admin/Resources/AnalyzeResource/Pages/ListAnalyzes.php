<?php

namespace App\Filament\Admin\Resources\AnalyzeResource\Pages;

use App\Filament\Admin\Resources\AnalyzeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnalyzes extends ListRecords
{
    protected static string $resource = AnalyzeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
