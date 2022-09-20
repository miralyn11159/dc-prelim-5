<?php

namespace App\Http\Livewire\Sales;
use App\Models\Sale;
use Livewire\Component;

class Edit extends Component
{

    public $saleId;
    public $name,$amount,$type;


    public function mount(){

        $this->name = $this->sale->name;
        $this->amount = $this->sale->amount;
        $this->type = $this->sale->type;

    }

    public function editSale()
    {
        $this->validate([
            'name'        => ['required','string','max:255'],
            'amount'        => ['required'],
            'type'         => ['required','string','max:255'],
        ]);

        $this->sale->update([
            'name'=> $this->name,
            'amount'=> $this->amount,
            'type'=> $this->type,
        ]);

        return redirect('/dashboard')->with('message', $this->sale->name .' updated successfully');
    }


    public function getSaleProperty(){
        return Sale::find($this->saleId);
    }

    public function render()
    {
        return view('livewire.sales.edit');
    }
}
