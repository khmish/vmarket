<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return __('Vendor.vendors');
    }
    public static function getLabel(): ?string
    {
        return __('Product.product');
    }
    public static function getPluralLabel(): ?string
    {
        return __('Product.products');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->label(__('Product.name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                ->label(__('Product.description'))
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                ->label(__('Product.image'))
                    ->image(),
                Forms\Components\Select::make('vendor_id')
                ->label(__('Product.vendor'))
                    ->relationship('vendor', 'name')
                    ->required(),
                Forms\Components\Select::make('product_type')
                ->label(__('Product.product'))
                    ->relationship('productType', 'name')
                    ->required(),
                Forms\Components\TextInput::make('cost')
                ->label(__('Product.cost'))
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->prefix('$'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->label(__('Product.name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                ->label(__('Product.description'))
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                ->label(__('Product.image')),
                Tables\Columns\TextColumn::make('vendor.name')
                ->label(__('Product.vendor'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('productType.name')
                ->label(__('Product.product_type'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cost')
                ->label(__('Product.cost'))
                    ->money()
                    ->sortable(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
