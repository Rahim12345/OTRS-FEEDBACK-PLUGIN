<?php

namespace App\Http\Controllers;

use App\Models\ArticleSearchIndex;
use App\Models\Ticket;
use App\Models\TicketHistory;
use App\Models\User;
use App\Traits\Searcher;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    use Searcher;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $where = [
            [
                'ticket_state_id', '=', 2
            ]
        ];

        if (request('sorgu_action') == 'sorgusuz') {
            $where[] = [
                's1', '=', 0
            ];
        } elseif (request('sorgu_action') == 'sorgulu') {
            $where[] = [
                's1', '!=', 0
            ];
        }

        if (request('user_id')) {
            $where[] = [
                'user_id', '=', request('user_id')
            ];
        }

        if (request('start_time')) {
            $where[] = [
                'change_time', '>=', date(request('start_time') . " 00:00:00")
            ];
        }

        if (request('end_time')) {
            $where[] = [
                'change_time', '<=', date(request('end_time') . " 23:59:59")
            ];
        }

        $users = User::where('id', '!=', 1)->where('title', '!=', 'Rahim')->get();

        $tickets = $this->searching(Ticket::class, ['getWorker'], [], [], ['*'], $where, [], [['ticket.id', 'desc']]);

        return view('home', [
            'tickets' => $tickets,
            'users' => $users,
        ]);
    }

    public function ticketHistory($ticket_id)
    {
        $ticket = Ticket::whereId($ticket_id)->firstOrFail();
        $ticket_histories = ArticleSearchIndex::with('getArticle.getCreator')->where('ticket_id', $ticket_id)
            ->where('article_key', 'MIMEBase_Body')
            ->where('article_value', '!=', '')
            ->get();

        return view('front.ticket-history', [
            'ticket_histories' => $ticket_histories,
            'ticket'=>$ticket
        ]);


    }
}
