<?php

namespace App\Livewire\Products\Components;

use Livewire\Component;

class StockStatus extends Component
{
    public $status;

    public function render()
    {
        return view('livewire.products.components.stock-status');
    }
}
