<?php

namespace App\Http\Controllers\Media;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller {

    function show($id) {
        $product = Product::find($id);

        if(!$product || ($product && $product->image_url == null)) {
            abort(404);
        }

        return Storage::response('photos/' . $product->image_url);
    }

}
