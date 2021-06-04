<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;

class Product extends Component {

    public $product;

    public function mount($id) {
        $this->product = \App\Models\Product::find($id);
    }

    public function render() {
        return view('livewire.admin.products.product', ['product' => $this->product]);
    }
}
