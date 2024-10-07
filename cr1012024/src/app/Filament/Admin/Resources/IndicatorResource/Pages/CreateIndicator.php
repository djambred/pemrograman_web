<?php

namespace App\Filament\Admin\Resources\IndicatorResource\Pages;

use App\Filament\Admin\Resources\IndicatorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateIndicator extends CreateRecord
{
    protected static string $resource = IndicatorResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
