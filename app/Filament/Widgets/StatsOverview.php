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
            Stat::make('Pengguna', User::count()),
            Stat::make('Acara', Event::count()),
            Stat::make('Transaksi', Transaction::count()),
        ];
    }
}
