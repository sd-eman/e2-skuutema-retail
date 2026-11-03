<?php

namespace App\Filament\Resources\OrderLines\Pages;

use App\Filament\Resources\OrderLines\OrderLineResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOrderLines extends ListRecords
{
    protected static string $resource = OrderLineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
