<?php

namespace App\Livewire\Components;

use App\Models\Product;
use Livewire\Component;

class ViewProduct extends Component
{
    public ?Product $product;
    public function mount($product=null)
    {
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.components.view-product');
    }
}
