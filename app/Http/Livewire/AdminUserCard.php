<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminUserCard extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.admin-user-card');
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
