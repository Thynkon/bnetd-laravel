<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class DashboardUserContainer extends Component
{
    protected $listeners = ['userRemoved'];

    public function render()
    {
        return view('livewire.dashboard-user-container', [
            'users' => User::all(),
        ]);
    }

    public function userRemoved()
    {
        $this->render();
    }
}
