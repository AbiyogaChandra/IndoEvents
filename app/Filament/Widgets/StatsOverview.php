<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Event;
use App\Models\Transaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::count()),
            Stat::make('Events', Event::count()),
            Stat::make('Transactions', Transaction::count()),
        ];
    }
}
