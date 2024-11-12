<?php

namespace App\Filament\Resources\ProfileResource\Pages;

use App\Filament\Resources\ProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewProfile extends ViewRecord
{
    protected static string $resource = ProfileResource::class;

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
