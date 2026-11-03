<?php

namespace App\Filament\Resources\ComplaintForwards\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ComplaintForwardForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('complaint_id')
                    ->relationship('complaint', 'name')
                    ->required(),
                TextInput::make('forwarded_to')
                    ->required()
                    ->numeric(),
                DateTimePicker::make('forwarded_at')
                    ->required(),
            ]);
    }
}
