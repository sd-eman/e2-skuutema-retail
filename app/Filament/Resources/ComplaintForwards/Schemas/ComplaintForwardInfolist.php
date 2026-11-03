<?php

namespace App\Filament\Resources\ComplaintForwards\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ComplaintForwardInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('complaint.name')
                    ->label('Complaint'),
                TextEntry::make('forwarded_to')
                    ->numeric(),
                TextEntry::make('forwarded_at')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
