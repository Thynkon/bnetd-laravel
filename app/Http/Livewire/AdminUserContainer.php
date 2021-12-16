<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminUserContainer extends Component
{
    protected $listeners = ['userRemoved'];

    public function render()
    {
        return view('livewire.admin-user-container', [
            'users' => User::all(),
        ]);
    }

    public function userRemoved()
    {
        $this->render();
    }
}
