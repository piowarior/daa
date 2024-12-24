<?php

namespace App\Filament\Admin\Resources\PenyimpananResource\Pages;

use App\Filament\Admin\Resources\PenyimpananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenyimpanans extends ListRecords
{
    protected static string $resource = PenyimpananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
