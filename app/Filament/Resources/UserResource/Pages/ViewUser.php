<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\Action::make('Back')
                ->label('Kembali')
                ->color('secondary')
                ->url(fn () => static::getResource()::getUrl('index'))
                ->icon('heroicon-o-arrow-left'),
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

}
