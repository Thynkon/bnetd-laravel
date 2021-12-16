<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class DashboardUserCard extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.dashboard-user-card');
    }

    public function block()
    {
        $this->user->active = !$this->user->active;
        $this->user->save();
    }

    public function remove()
    {
        $this->user->delete();
        $this->emitUp('userRemoved');
    }
}
