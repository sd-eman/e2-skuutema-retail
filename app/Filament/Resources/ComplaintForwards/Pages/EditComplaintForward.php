<?php

namespace App\Filament\Resources\ComplaintForwards\Pages;

use App\Filament\Resources\ComplaintForwards\ComplaintForwardResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditComplaintForward extends EditRecord
{
    protected static string $resource = ComplaintForwardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
