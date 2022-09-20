<?php

namespace App\Http\Livewire\Stalls;
use App\Models\Stall;
use Livewire\Component;

class Edit extends Component
{

    public $stallId;
    public $name,$owner,$product;


    public function mount(){

        $this->name = $this->stall->name;
        $this->owner = $this->stall->owner;
        $this->product = $this->stall->product;

    }

    public function editStall()
    {
        $this->validate([
            'name'        => ['required','string','max:255'],
            'owner'        => ['required'],
            'product'         => ['required','string','max:255'],
        ]);

        $this->stall->update([
            'name'=> $this->name,
            'owner'=> $this->owner,
            'product'=> $this->product,
        ]);

        return redirect('/dashboard')->with('message', $this->stall->name .' updated successfully');
    }


    public function getStallProperty(){
        return Stall::find($this->stallId);
    }

    public function render()
    {
        return view('livewire.stalls.edit');
    }
}
