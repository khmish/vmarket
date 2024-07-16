<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Filament\Resources\CarResource\RelationManagers;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getNavigationGroup(): ?string
    {
        return __('car.cars');
    }
    
    public static function getLabel(): ?string
    {
        return __('car.car');
    }
    public static function getPluralLabel(): ?string
    {
        return __('car.cars');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(__('car.name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('capacity')
                    ->label(__('car.capacity'))
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\Select::make('car_type_id')
                    ->label(__('car.car_type'))
                    ->relationship('carType', 'name')
                    ->required(),
                Forms\Components\Select::make('refrigerating_type_id')
                    ->label(__('car.refrigerating_type'))
                    ->relationship('refrigeratingType', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('car.name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('capacity')
                    ->label(__('car.capacity'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('carType.name')
                    ->label(__('car.carType.name'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('refrigeratingType.name')
                    ->label(__('car.refrigeratingType.name'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('car.'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__('car.'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->label(__('car.'))
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
