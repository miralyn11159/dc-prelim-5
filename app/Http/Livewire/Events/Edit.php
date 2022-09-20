<?php

namespace App\Http\Livewire\Events;
use App\Models\Event;
use Livewire\Component;

class Edit extends Component
{

    public $eventId;
    public $name,$place,$host;


    public function mount(){

        $this->name = $this->event->name;
        $this->place = $this->event->place;
        $this->host = $this->event->host;

    }

    public function editEvent()
    {
        $this->validate([
            'name'        => ['required','string','max:255'],
            'place'        => ['required'],
            'host'         => ['required','string','max:255'],
        ]);

        $this->event->update([
            'name'=> $this->name,
            'place'=> $this->place,
            'host'=> $this->host,
        ]);

        return redirect('/dashboard')->with('message', $this->event->name .' updated successfully');
    }


    public function getEventProperty(){
        return Event::find($this->eventId);
    }

    public function render()
    {
        return view('livewire.events.edit');
    }
}
