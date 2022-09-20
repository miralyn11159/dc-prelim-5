<?php

namespace App\Http\Livewire\Stalls;

use App\Models\Stall;
use Livewire\Component;

class Index extends Component
{
    public function loadStall() {
        $stalls = Stall::orderBy('name')->get();

        return compact('stalls');
    }

    public function render()
    {
        return view('livewire.stalls.index', $this->loadStall());
    }
}
