<?php

namespace App\Filament\Resources\OrderLines\Pages;

use App\Filament\Resources\OrderLines\OrderLineResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderLine extends CreateRecord
{
    protected static string $resource = OrderLineResource::class;
}
