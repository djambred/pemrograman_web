<?php

namespace App\Filament\Admin\Resources\AspectResource\Pages;

use App\Filament\Admin\Resources\AspectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAspects extends ListRecords
{
    protected static string $resource = AspectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
