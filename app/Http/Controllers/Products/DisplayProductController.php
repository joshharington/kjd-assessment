<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DisplayProductController extends Controller {

    function index() {
        return view('display.products.index');
    }

    function show($id) {
        return view('display.products.show', ['id' => $id]);
    }

}
