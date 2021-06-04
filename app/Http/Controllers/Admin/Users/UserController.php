<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller {

    function index() {
        return view('admin.users.index');
    }

    function store() {
        return view('admin.users.store');
    }

    function show($id) {
        return view('admin.users.show', ['id' => $id]);
    }

    function update($id) {
        return view('admin.users.update', ['id' => $id]);
    }

}
