<?php

namespace App\Filament\Admin\Resources\DetailLevelingIndexResource\Pages;

use App\Filament\Admin\Resources\DetailLevelingIndexResource;
use Filament\Resources\Pages\EditRecord;

class EditDetailLevelingIndex extends EditRecord
{
    protected static string $resource = DetailLevelingIndexResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
