<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextInput\Mask;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label("nama")
                    ->required(),
                TextInput::make('short_description')
                    ->label("keterangan singkat (120 max)")
                    ->required(),
                Textarea::make('description')
                    ->label("keterangan")
                    ->columnSpanFull(),
                TextInput::make('price')
                    ->label("harga")
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                FileUpload::make('image_path')
                    ->label("gambar")
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        "1:1"
                    ])
                    ->required()
                    ->disk('public')
                    ->directory('products')
                    ->imageResizeMode('cover'),
            ]);
    }
}
