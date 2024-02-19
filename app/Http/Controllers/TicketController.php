<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function feedback($ticket_token)
    {
        $ticket = Ticket::where('ticket_token', $ticket_token)
            ->where('ticket_state_id', 2)
            ->firstOrFail();

        return view('front.feedback', compact('ticket'));
    }

    public function feedbackAdmin($ticket_token)
    {
        $ticket = Ticket::where('ticket_token', $ticket_token)
            ->where('ticket_state_id', 2)
            ->firstOrFail();

        return view('front.feedback-admin-show', compact('ticket'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            's7' => 'nullable|in:1,2,3,4,5',
            's6' => 'nullable|in:1,2,3,4,5',
            's5' => 'nullable|in:1,2,3,4,5',
            's4' => 'nullable|in:1,2,3,4,5',
            's3' => 'nullable|in:1,2,3,4,5',
            's2' => 'nullable|in:1,2,3,4,5',
            's1' => 'nullable|in:1,2,3,4,5',
            'ticket_token' => 'required|exists:ticket,ticket_token',
            'suggest' => 'nullable|max:1000',
        ], [
            's7.required' => 'Sorğu 7 -ə cavab verin',
            's6.required' => 'Sorğu 6 -ə cavab verin',
            's5.required' => 'Sorğu 5 -ə cavab verin',
            's4.required' => 'Sorğu 4 -ə cavab verin',
            's3.required' => 'Sorğu 3 -ə cavab verin',
            's2.required' => 'Sorğu 2 -ə cavab verin',
            's1.required' => 'Sorğu 1 -ə cavab verin',
        ], [
            's7' => 'Sorğu 7',
            's6' => 'Sorğu 6',
            's5' => 'Sorğu 5',
            's4' => 'Sorğu 4',
            's3' => 'Sorğu 3',
            's2' => 'Sorğu 2',
            's1' => 'Sorğu 1',
            'ticket_token' => 'Ticket',
            'suggest' => 'Təklif',
        ]);

        $ticket = Ticket::where('ticket_token', $request->ticket_token)
            ->where('ticket_state_id', 2)
            ->firstOrFail();

        $ticket->update([
            's7' => $request->s7 ? $request->s7 : 0,
            's6' => $request->s6 ? $request->s6 : 0,
            's5' => $request->s5 ? $request->s5 : 0,
            's4' => $request->s4 ? $request->s4 : 0,
            's3' => $request->s3 ? $request->s3 : 0,
            's2' => $request->s2 ? $request->s2 : 0,
            's1' => $request->s1 ? $request->s1 : 0,
            'suggest' => $request->suggest,
        ]);

        return response()->json([
            'message' => 'Success'
        ], 200);
    }
}
