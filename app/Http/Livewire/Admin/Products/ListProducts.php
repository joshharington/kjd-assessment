<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;

class ListProducts extends Component {

    public $products;

    public function mount() {
        $this->products = \App\Models\Product::orderBy('name', 'ASC')->get();
    }

    public function render() {
        return view('livewire.admin.products.list-products', ['products' => $this->products]);
    }
}
