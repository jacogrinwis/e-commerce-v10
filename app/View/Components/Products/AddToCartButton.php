<?php

namespace App\View\Components\Products;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddToCartButton extends Component
{
    public $product;
    public $disabled;

    /**
     * Create a new component instance.
     */
    public function __construct($product, $disabled)
    {
        $this->product = $product;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.products.add-to-cart-button');
    }
}
