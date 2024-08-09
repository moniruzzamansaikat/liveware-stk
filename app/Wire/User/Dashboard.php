<?php

namespace App\Wire\User;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('user.dashboard')->layout('layouts.dashboard');
    }
}
