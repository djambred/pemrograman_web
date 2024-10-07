<?php

namespace App\Filament\Admin\Resources\LevelingIndexResource\Pages;

use App\Filament\Admin\Resources\LevelingIndexResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLevelingIndices extends ListRecords
{
    protected static string $resource = LevelingIndexResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
