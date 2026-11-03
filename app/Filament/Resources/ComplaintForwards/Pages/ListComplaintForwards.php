<?php

namespace App\Filament\Resources\ComplaintForwards\Pages;

use App\Filament\Resources\ComplaintForwards\ComplaintForwardResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListComplaintForwards extends ListRecords
{
    protected static string $resource = ComplaintForwardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
