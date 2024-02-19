<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LastTicketsPreparingToCurrentSituation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feedback:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'last tickets preparing to current situation';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $tickets = \App\Models\Ticket::all();

        foreach($tickets as $ticket)
        {
            $ticket->update([
                'ticket_token'=>str_random(64),
                'mail_send'=>1
            ]);
        }

        $this->info('Feedback run successfully');
    }
}
