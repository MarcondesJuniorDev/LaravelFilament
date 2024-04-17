<?php

namespace App\Livewire\Site;

use Illuminate\View\View;
use Livewire\Component;

class Home extends Component
{
    public function render(): View
    {
        return view('livewire.site.home');
    }
}
