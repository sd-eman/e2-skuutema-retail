<?php

namespace App\Filament\Resources\ComplaintForwards\Pages;

use App\Filament\Resources\ComplaintForwards\ComplaintForwardResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewComplaintForward extends ViewRecord
{
    protected static string $resource = ComplaintForwardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
