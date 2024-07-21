<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RefrigeratingTypeResource\Pages;
use App\Filament\Resources\RefrigeratingTypeResource\RelationManagers;
use App\Models\RefrigeratingType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RefrigeratingTypeResource extends Resource
{
    protected static ?string $model = RefrigeratingType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return __('Vendor.vendors');
    }
    public static function getLabel(): ?string
    {
        return __('RefrigeratingType.refrigerating_type');
    }
    public static function getPluralLabel(): ?string
    {
        return __('RefrigeratingType.refrigerating_types');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->label(__('RefrigeratingType.name'))
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->label(__('RefrigeratingType.name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
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
            'index' => Pages\ListRefrigeratingTypes::route('/'),
            'create' => Pages\CreateRefrigeratingType::route('/create'),
            'edit' => Pages\EditRefrigeratingType::route('/{record}/edit'),
        ];
    }
}
