<?php

namespace App\Filament\Admin\Resources\PenyimpananResource\Pages;

use App\Filament\Admin\Resources\PenyimpananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenyimpanan extends EditRecord
{
    protected static string $resource = PenyimpananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
