<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VendorResource\Pages;
use App\Filament\Resources\VendorResource\RelationManagers;
use App\Models\Vendor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VendorResource extends Resource
{
    protected static ?string $model = Vendor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getNavigationGroup(): ?string
    {
        return __('vendor.vendors');
    }
    public static function getLabel(): ?string
    {
        return __('vendor.vendor');
    }
    public static function getPluralLabel(): ?string
    {
        return __('vendor.vendors');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->label(__('vendor.name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                ->label(__('vendor.email'))
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                ->label(__('vendor.phone'))
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                ->label(__('vendor.address'))
                    ->maxLength(255),
                Forms\Components\Select::make('city_id')
                ->label(__('vendor.city'))
                    ->relationship('city', 'name')
                    ->required(),
                Forms\Components\Select::make('branch_id')
                ->label(__('vendor.branch'))
                    ->relationship('branch', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->label(__('vendor.name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                ->label(__('vendor.email'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                ->label(__('vendor.phone'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                ->label(__('vendor.address'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('city.name')
                ->label(__('vendor.city'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('branch.name')
                ->label(__('vendor.branch'))
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
            'index' => Pages\ListVendors::route('/'),
            'create' => Pages\CreateVendor::route('/create'),
            'edit' => Pages\EditVendor::route('/{record}/edit'),
        ];
    }
}
