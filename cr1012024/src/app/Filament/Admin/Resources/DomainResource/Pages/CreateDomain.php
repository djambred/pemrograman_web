<?php

namespace App\Filament\Admin\Resources\DomainResource\Pages;

use App\Filament\Admin\Resources\DomainResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDomain extends CreateRecord
{
    protected static string $resource = DomainResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
