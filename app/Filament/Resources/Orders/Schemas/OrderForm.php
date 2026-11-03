<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('customer_id')
                    ->relationship('customer', 'name')
                    ->required(),
                Select::make('store_id')
                    ->relationship('store', 'name')
                    ->required(),
                DateTimePicker::make('ordered_at')
                    ->required(),
                TextInput::make('status')
                    ->required()
                    ->default('new'),
            ]);
    }
}
