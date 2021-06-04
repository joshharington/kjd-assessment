<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller {

    function index() {
        return view('admin.products.index');
    }

    function store() {
        return view('admin.products.store');
    }

    function show($id) {
        return view('admin.products.show', ['id' => $id]);
    }

    function update($id) {
        return view('admin.products.update', ['id' => $id]);
    }

}
