<?php

namespace App\Wire\Site;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('site.home');
    }
}
