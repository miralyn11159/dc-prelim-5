<?php

namespace App\Http\Livewire\Stalls;

use App\Models\Stall;
use Livewire\Component;

class Create extends Component
{
    public $name,$owner,$product;

    public function addStall(){

            $this->validate([
                'name'        => ['required','string','max:255'],
                'owner'         => ['required'],
                'product'          => ['required','string','max:255'],
            ]);

            Stall::create([
                'name'        => $this->name,
                'owner'         => $this->owner,
                'product'          => $this->product,
            ]);

            return redirect('/dashboard')->with('message', $this->name . ' added successfully');
    }



    public function render()
    {
        return view('livewire.stalls.create');
    }
}
