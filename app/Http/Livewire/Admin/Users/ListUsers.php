<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class ListUsers extends Component {

    public $users;

    public function mount() {
        $this->users = \App\Models\User::orderBy('name', 'ASC')->get();
    }

    public function render() {
        return view('livewire.admin.users.list-users', ['users' => $this->users]);
    }
}
