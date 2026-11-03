<?php

namespace App\Filament\Resources\ComplaintForwards;

use App\Filament\Resources\ComplaintForwards\Pages\CreateComplaintForward;
use App\Filament\Resources\ComplaintForwards\Pages\EditComplaintForward;
use App\Filament\Resources\ComplaintForwards\Pages\ListComplaintForwards;
use App\Filament\Resources\ComplaintForwards\Pages\ViewComplaintForward;
use App\Filament\Resources\ComplaintForwards\Schemas\ComplaintForwardForm;
use App\Filament\Resources\ComplaintForwards\Schemas\ComplaintForwardInfolist;
use App\Filament\Resources\ComplaintForwards\Tables\ComplaintForwardsTable;
use App\Models\ComplaintForward;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ComplaintForwardResource extends Resource
{
    protected static ?string $model = ComplaintForward::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ComplaintForwardForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ComplaintForwardInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ComplaintForwardsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListComplaintForwards::route('/'),
            'create' => CreateComplaintForward::route('/create'),
            'view' => ViewComplaintForward::route('/{record}'),
            'edit' => EditComplaintForward::route('/{record}/edit'),
        ];
    }
}
