<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';
    protected static ?string $navigationLabel = 'Категории';
    protected static ?string $pluralLabel = 'Категории';
    protected static ?string $modelLabel = 'Категория';

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
                ->label('Slug')
                ->hidden()
                ->dehydrated()
                ->required(),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->label('Име')->searchable(),
            TextColumn::make('slug')->label('Slug')->copyable()->copyMessage('Копирано!'),
            TextColumn::make('created_at')->label('Създадена')->date('d.m.Y'),
        ])->actions([
            \Filament\Tables\Actions\EditAction::make()->label('Редакция'),
            \Filament\Tables\Actions\DeleteAction::make()->label('Изтриване'),
        ])->bulkActions([
            \Filament\Tables\Actions\DeleteBulkAction::make()->label('Изтрий избраните'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
