<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function buyTicket() {
        return view('ticket.buy');
    }

    public function myTicket() {
        return view('ticket.my');
    }


}
