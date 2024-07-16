<?php

namespace App\Filament\Resources\VendorCarResource\Pages;

use App\Filament\Resources\VendorCarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVendorCars extends ListRecords
{
    protected static string $resource = VendorCarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
