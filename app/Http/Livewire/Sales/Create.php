<?php

namespace App\Http\Livewire\Sales;

use App\Models\Sale;
use Livewire\Component;

class Create extends Component
{
    public $name,$amount,$type;

    public function addSale(){

            $this->validate([
                'name'        => ['required','string','max:255'],
                'amount'         => ['required'],
                'type'          => ['required','string','max:255'],
            ]);

            Sale::create([
                'name'        => $this->name,
                'amount'         => $this->amount,
                'type'          => $this->type,
            ]);

            return redirect('/dashboard')->with('message', $this->name . ' added successfully');
    }



    public function render()
    {
        return view('livewire.sales.create');
    }
}
