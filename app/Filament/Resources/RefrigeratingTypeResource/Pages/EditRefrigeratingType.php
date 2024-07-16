<?php

namespace App\Filament\Resources\RefrigeratingTypeResource\Pages;

use App\Filament\Resources\RefrigeratingTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRefrigeratingType extends EditRecord
{
    protected static string $resource = RefrigeratingTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
