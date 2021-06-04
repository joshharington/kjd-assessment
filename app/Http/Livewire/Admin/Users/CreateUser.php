<?php

namespace App\Http\Livewire\Admin\Users;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class CreateUser extends Component {

    public $roles;
    public $user;
    public $name;
    public $email;
    public $role = 4; // Default to Client

    public function rules() {
        return $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users' . (($this->user) ? ',email,' . $this->user->id : ''),
            'role' => 'required',
        ];
    }

    public function save() {
        $this->validate();

        if($this->user != null) {
            $user = \App\Models\User::find($this->user->id);
        } else {
            $user = new \App\Models\User;
        }

        // Generate random password
//        $password = strtoupper(Str::random(10));
        $password = '12345678a!'; // Default password for demo

        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($password);
        $user->save();

        $user->syncRoles([$this->role]);

        // Email user
        // TODO:: Email password to user

        return redirect()->route('admin.users.show', ['id' => $user->id]);
    }

    public function goBack() {
        if($this->user_id != null) {
            return redirect()->route('admin.users.show', ['id' => $this->user->id]);
        }
        return redirect()->route('admin.users');
    }

    public function mount($id = null) {
        if($id != null) {
            $user = \App\Models\User::find($id);
            if ($user != null) {
                $roles = $user->getRoleNames();
                $role = Role::where('name', $roles[0])->first();

                $this->name = $user->name;
                $this->email = $user->email;
                $this->role = $role->id;
                $this->user = $user;
            }
        }
        $this->roles = Role::orderBy('name', 'ASC')->get();
    }

    public function render() {
        return view('livewire.admin.users.create-user', ['roles' => $this->roles]);
    }
}
