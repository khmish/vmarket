<?php

namespace App\Filament\Resources\RefrigeratingTypeResource\Pages;

use App\Filament\Resources\RefrigeratingTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRefrigeratingTypes extends ListRecords
{
    protected static string $resource = RefrigeratingTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
