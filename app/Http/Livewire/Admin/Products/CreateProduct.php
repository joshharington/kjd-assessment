<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component {

    use WithFileUploads;

    public $product_id;
    public $categories;
    public $category = 1;
    public $is_published = 0;
    public $name;
    public $description;
    public $price;
    public $photo;
    public $img_url;
    public $has_product_photo = false;

    protected $rules = [
        'name' => 'required',
        'price' => 'required',
        'photo' => 'nullable|image|max:1024',
    ];

    public function save() {
        $this->validate();

        if($this->product_id != null) {
            $product = \App\Models\Product::find($this->product_id);
        } else {
            $product = new \App\Models\Product;
            $product->creator_id = auth()->user()->id;
        }

        $product->name = $this->name;
        $product->description = $this->description;
        $product->price = $this->price;
        $product->is_published = $this->is_published;
        $product->category_id = $this->category;

        if($this->has_product_photo == false && $this->img_url != null) {
            // Image was provided but removed, set to null
            $product->image_url = null;
        }

        if($this->photo != null) {
            $file_name = time() . '_' . Str::random(10) . '.png';
            $this->photo->storeAs('photos', $file_name);
            $product->image_url = $file_name;
        }

        $product->save();

        return redirect()->route('admin.products.show', ['id' => $product->id]);
    }

    public function removeProductPhoto() {
        $this->has_product_photo = !$this->has_product_photo;
    }

    public function goBack() {
        if($this->product_id != null) {
            return redirect()->route('admin.products.show', ['id' => $this->product_id]);
        }
        return redirect()->route('admin.products');
    }

    public function mount($id = null) {
        if($id != null) {
            $product = \App\Models\Product::find($id);
            if ($product != null) {
                $this->product_id = $id;
                $this->name = $product->name;
                $this->description = $product->description;
                $this->price = $product->price;
                $this->is_published = $product->is_published;
                $this->category = $product->category_id;
                $this->img_url = $product->image_url;
                $this->has_product_photo = ($this->img_url != '');
            }
        }
        $this->categories = Category::orderBy('name', 'ASC')->get();
    }

    public function render() {
        return view('livewire.admin.products.create-product', [
            'categories' => $this->categories,
            'is_published' => $this->is_published,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'id' => $this->product_id,
        ]);
    }
}
