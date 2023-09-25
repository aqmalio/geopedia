<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Event;

class CreateEvent extends Component
{

    public $name;
    public $type;
    public $date;
    public $location;
    public $amount;
    protected $listeners = ['saved' => 'submitEvent'];

    protected $rules = [
        'name' => 'required|min:6',
        'type' => 'required',
        'date' => 'required|date',
        'location' => 'required',
        'amount' => 'required',
    ];
    public function render()
    {
        return view('livewire.create-event');
    }

    public function submitEvent() {
        $validatedData = $this->validate();
        Event::create($validatedData);
        return redirect(route('show.event'));
    }
}
