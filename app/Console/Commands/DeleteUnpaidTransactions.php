<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Transaction;
use Carbon\Carbon;

class DeleteUnpaidTransactions extends Command
{
    protected $signature = 'transactions:cleanup';
    protected $description = 'Delete unpaid transactions that are older than a specified time';

    public function handle()
    {
        // Define the expiration time (e.g., 30 minutes)
        $expirationTime = Carbon::now()->subMinutes(30);

        // Delete transactions with `pending` status that are older than the expiration time
        $deleted = Transaction::where('status', 'unpaid')
            ->where('created_at', '<', $expirationTime)
            ->delete();

        $this->info("Deleted $deleted unpaid transactions.");
    }
}