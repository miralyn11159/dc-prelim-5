<?php

namespace App\Http\Livewire\Stalls;
use App\Models\Stall;
use Livewire\Component;

class Delete extends Component
{

    public $stallId;



    public function getStallProperty(){
        return Stall::find($this->stallId);
    }

    public function render()
    {
        return view('livewire.stalls.delete');
    }
    public function delete() {
        $this->stall->delete();

        return redirect('/dashboard')->with('message', $this->stall->name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
