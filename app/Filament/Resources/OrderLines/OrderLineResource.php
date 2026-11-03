<?php

namespace App\Filament\Resources\OrderLines;

use App\Filament\Resources\OrderLines\Pages\CreateOrderLine;
use App\Filament\Resources\OrderLines\Pages\EditOrderLine;
use App\Filament\Resources\OrderLines\Pages\ListOrderLines;
use App\Filament\Resources\OrderLines\Pages\ViewOrderLine;
use App\Filament\Resources\OrderLines\Schemas\OrderLineForm;
use App\Filament\Resources\OrderLines\Schemas\OrderLineInfolist;
use App\Filament\Resources\OrderLines\Tables\OrderLinesTable;
use App\Models\OrderLine;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OrderLineResource extends Resource
{
    protected static ?string $model = OrderLine::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return OrderLineForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return OrderLineInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OrderLinesTable::configure($table);
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
            'index' => ListOrderLines::route('/'),
            'create' => CreateOrderLine::route('/create'),
            'view' => ViewOrderLine::route('/{record}'),
            'edit' => EditOrderLine::route('/{record}/edit'),
        ];
    }
}
