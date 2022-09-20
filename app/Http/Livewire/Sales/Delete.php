<?php

namespace App\Http\Livewire\Sales;
use App\Models\Sale;
use Livewire\Component;

class Delete extends Component
{

    public $saleId;



    public function getSaleProperty(){
        return Sale::find($this->saleId);
    }

    public function render()
    {
        return view('livewire.sales.delete');
    }
    public function delete() {
        $this->sale->delete();

        return redirect('/dashboard')->with('message', $this->sale->name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
