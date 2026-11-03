<?php

namespace App\Filament\Resources\OrderLines\Pages;

use App\Filament\Resources\OrderLines\OrderLineResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewOrderLine extends ViewRecord
{
    protected static string $resource = OrderLineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
