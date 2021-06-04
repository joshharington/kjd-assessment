<?php

namespace App\Http\Livewire\Display\Products;

use App\Models\Product;
use App\Models\WishlistItem;
use Livewire\Component;

class ListProducts extends Component {

    public $products;
    public $wishlist_items = [];

    protected $listeners = ['refreshProducts'];

    public function refreshProducts() {
        // Refresh if the argument is NULL or is the product ID
        if(auth()->check()) {
            $user_id = auth()->user()->id;
            $this->wishlist_items = WishlistItem::where('user_id', $user_id)->pluck('product_id')->toArray();
        }
    }

    public function removeFromWishlist($product_id) {
        $item = WishlistItem::where('product_id', $product_id)->where('user_id', auth()->user()->id)->first();
        if($item) {
            if(in_array($product_id, $this->wishlist_items)) {
                // Remove item from wishlist items
                unset($this->wishlist_items[array_search($product_id, $this->wishlist_items)]);
            }
            $item->delete();
            $this->emit('refreshProducts');
        }
    }

    public function addToWishlist($product_id) {

        $item = new WishlistItem;
        $item->user_id = auth()->user()->id;
        $item->product_id = $product_id;
        $item->save();

        $this->emit('refreshProducts');
    }

    public function mount() {
        $this->products = Product::where('is_published', 1)->orderBy('name', 'ASC')->get();
    }

    public function render() {
        if(auth()->check()) {
            $user_id = auth()->user()->id;
            $this->wishlist_items = WishlistItem::where('user_id', $user_id)->pluck('product_id')->toArray();
        }

        return view('livewire.display.products.list-products', ['products' => $this->products, 'wishlist_items' => $this->wishlist_items]);
    }
}
