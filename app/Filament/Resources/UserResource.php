<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function getLabel(): ?string
    {
        return __('User.user');
    }
    public static function getPluralLabel(): ?string
    {
        return __('User.users');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(__('User.name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label(__('User.email'))
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('vendor_id')
                    ->label(__('User.vendor_id'))
                    ->relationship('vendor', 'name'),
                Forms\Components\TextInput::make('password')
                    ->label(__('User.password'))
                    ->password()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('role')
                    ->label(__('User.role'))
                    ->required()
                    ->maxLength(255)
                    ->default('admin'),
                Forms\Components\DateTimePicker::make('email_verified_at')
                    ->label(__('User.email_verified_at')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('User.name'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label(__('User.email'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('vendor.name')
                    ->label(__('vendor.name'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('role')
                    ->label(__('User.role'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('User.name'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__('User.updated_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->label(__('User.deleted_at'))
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
