<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventPromotorController extends Controller
{
    public function addEvent() {
        return view('event.add');
    }

    public function showEvent()
    {
        $event = Event::withCount('sell_ticket')->get();
        return view('event.list', compact(['event']));
    }
}
