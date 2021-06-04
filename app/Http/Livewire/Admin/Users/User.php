<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class User extends Component {

    public $user;

    public function mount($id) {
        $this->user = \App\Models\User::find($id);
    }

    public function render() {
        return view('livewire.admin.users.user', ['user' => $this->user]);
    }
}
