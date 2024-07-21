<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VendorCarResource\Pages;
use App\Filament\Resources\VendorCarResource\RelationManagers;
use App\Models\VendorCar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VendorCarResource extends Resource
{
    protected static ?string $model = VendorCar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getNavigationGroup(): ?string
    {
        return __('Vendor.vendors');
    }
    public static function getLabel(): ?string
    {
        return __('VendorCar.vendor_car');
    }
    public static function getPluralLabel(): ?string
    {
        return __('VendorCar.vendor_cars');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('car_id')
                ->label(__('VendorCar.car'))
                    ->relationship('car', 'name')
                    ->required(),
                Forms\Components\Select::make('vendor_id')
                ->label(__('VendorCar.vendor'))
                    ->relationship('vendor', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('car.name')
                ->label(__('VendorCar.car'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('vendor.name')
                ->label(__('VendorCar.vendor'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVendorCars::route('/'),
            'create' => Pages\CreateVendorCar::route('/create'),
            'edit' => Pages\EditVendorCar::route('/{record}/edit'),
        ];
    }
}
