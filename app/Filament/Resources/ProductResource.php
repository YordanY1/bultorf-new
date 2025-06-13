<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationLabel = 'Продукти';
    protected static ?string $pluralLabel = 'Продукти';
    protected static ?string $modelLabel = 'Продукт';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->label('Име')
                ->required()
                ->reactive()
                ->afterStateUpdated(function ($state, callable $set, callable $get) {
                    if (! filled($get('slug'))) {
                        $set('slug', Str::slug($state));
                    }
                }),

            TextInput::make('slug')
                ->hidden()
                ->dehydrated()
                ->required(),

            Select::make('category_id')
                ->label('Категория')
                ->relationship('category', 'name')
                ->required(),

            RichEditor::make('description')
                ->label('Описание')
                ->required(),

            FileUpload::make('image')
                ->label('Изображение')
                ->image()
                ->directory('products')
                ->nullable(),

            Toggle::make('top_position')
                ->label('Топ позиция'),
        ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->label('Снимка')->square(),
                TextColumn::make('name')->label('Име')->searchable(),
                TextColumn::make('category.name')->label('Категория'),
                IconColumn::make('top_position')
                    ->label('Топ?')
                    ->boolean(),
                TextColumn::make('updated_at')->label('Обновен')->dateTime('d.m.Y H:i'),
            ])
            ->actions([
                \Filament\Tables\Actions\EditAction::make()->label('Редакция'),
                \Filament\Tables\Actions\DeleteAction::make()->label('Изтриване'),
            ])
            ->bulkActions([
                \Filament\Tables\Actions\DeleteBulkAction::make()->label('Изтрий избраните'),
            ]);
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
