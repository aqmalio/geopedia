<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;
use App\Models\SellTicket;
use Illuminate\Support\Facades\Auth;

class BuyTicket extends Component
{
    public $buyModal;
    public $idEvent;
    public $qrCode;
    public function render()
    {
        return view('livewire.buy-ticket', [
             'events' => Event::all(),
        ]);
    }

    public function buy($id) {
        $this->buyModal = true;
        $this->idEvent = $id;
        $sellTicket = SellTicket::create([
            'event_id' => $id,
            'user_id' => Auth::user()->id,
            'status' => 'paid'
        ]);
        $this->qrCode = encrypt($id . $sellTicket->id);
    }

    public function closeModal() {
        $this->buyModal = false;
    }
}
