<?php

namespace App\Filament\Admin\Resources\LevelingIndexResource\Pages;

use App\Filament\Admin\Resources\LevelingIndexResource;
use Filament\Resources\Pages\EditRecord;

class EditLevelingIndex extends EditRecord
{
    protected static string $resource = LevelingIndexResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
