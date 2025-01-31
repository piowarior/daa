<?php

namespace App\Filament\Admin\Resources\HasilPenelitianResource\Pages;

use App\Filament\Admin\Resources\HasilPenelitianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHasilPenelitian extends EditRecord
{
    protected static string $resource = HasilPenelitianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
