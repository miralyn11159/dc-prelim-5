<?php

namespace App\Http\Livewire\Sales;

use App\Models\Sale;
use Livewire\Component;

class Index extends Component
{
    public function loadSale() {
        $sales = Sale::orderBy('name')->get();

        return compact('sales');
    }

    public function render()
    {
        return view('livewire.sales.index', $this->loadSale());
    }
}
