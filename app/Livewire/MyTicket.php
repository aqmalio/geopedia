<?php

namespace App\Livewire;

use App\Models\SellTicket;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyTicket extends Component
{
    public function render()
    {
        return view('livewire.my-ticket', [
            'tickets' => SellTicket::with('event')->where('user_id', Auth::user()->id)->get()
        ]);
    }
}
