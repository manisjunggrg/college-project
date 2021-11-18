<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateBid extends Component
{
    public $status;

    public function __construct($status = null)
    {
        $this->status = $status;
    }

    public function render()
    {
        return view('livewire.create-bid');
    }

    public function popupBidForm()
    {
        dd('this is popup form');
    }
}
