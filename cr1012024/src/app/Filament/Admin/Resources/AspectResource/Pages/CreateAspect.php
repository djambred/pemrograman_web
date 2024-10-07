<?php

namespace App\Filament\Admin\Resources\AspectResource\Pages;

use App\Filament\Admin\Resources\AspectResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAspect extends CreateRecord
{
    protected static string $resource = AspectResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
