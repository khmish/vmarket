<?php

namespace App\Filament\Resources\VendorCarResource\Pages;

use App\Filament\Resources\VendorCarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVendorCar extends EditRecord
{
    protected static string $resource = VendorCarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
