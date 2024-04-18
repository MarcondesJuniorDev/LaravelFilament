<?php

namespace App\Livewire\Site\Principal\Partials;

use Illuminate\View\View;
use Livewire\Component;

class Navigation extends Component
{
    public bool $isOpen = false;

    public function toggleMenu(): void
    {
        $this->isOpen = !$this->isOpen;
    }

    public function render(): View
    {
        return view('livewire.site.principal.partials.navigation');
    }
}
