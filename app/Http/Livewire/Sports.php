<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;

class Sports extends Component
{
    public $sportId;
    public $countries;
    public $sports = [null, null, null]; // Initial value for all 3 is null

    /*public function mount()
    {
        $this->countries = Country::all();
    }*/

    public function render()
    {
        return view('livewire.sports');
    }
}
