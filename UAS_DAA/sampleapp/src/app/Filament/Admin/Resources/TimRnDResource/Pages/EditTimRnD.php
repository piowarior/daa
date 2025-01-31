<?php

namespace App\Filament\Admin\Resources\TimRnDResource\Pages;

use App\Filament\Admin\Resources\TimRnDResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTimRnD extends EditRecord
{
    protected static string $resource = TimRnDResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
