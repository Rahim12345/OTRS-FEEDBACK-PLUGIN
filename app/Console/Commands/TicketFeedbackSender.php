<?php

namespace App\Console\Commands;

use App\Mail\ContactEmail;
use App\Models\Ticket;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TicketFeedbackSender extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feedback:sender';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Feedback göndərmək';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $ticket = Ticket::with('getWorker')
            ->where('ticket_state_id', 2)
            ->where('ticket_token', null)
            ->first();

        if ($ticket) {
            $ticket_token = str_random(64);

            $details = [
                'title' => $ticket->title,
                'customer_user_id' => $ticket->customer_user_id,
                'customer_id' => $ticket->customer_id,
                'worker_full_name' => $ticket->getWorker->first_name . ' ' . $ticket->getWorker->last_name,
                'worker_email' => $ticket->getWorker->login . '@adpu.edu.az',
                'link' => route('show.feedback', $ticket_token),
            ];

            Mail::to($ticket->customer_id)->send(new ContactEmail($details));

            $ticket->update([
                'ticket_token' => $ticket_token,
                'mail_send' => 1,
            ]);

            $this->info('Feedback göndərildi');
        }
        else
        {
            $this->info('Göndəriləsi feedback yoxdur');
        }
    }
}
