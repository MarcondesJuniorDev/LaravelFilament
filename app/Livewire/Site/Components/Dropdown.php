<?php

namespace App\Livewire\Site\Components;

use Illuminate\View\View;
use Livewire\Component;

class Dropdown extends Component
{
    public bool $isOpen = false;
    public string $title;
    public array $options;

    public function mount(string $title, array $options): void
    {
        $this->title = $title;
        $this->options = $options;
    }

    public function toggle(): void
    {
        $this->isOpen = !$this->isOpen;
    }

    public function render(): View
    {
        return view('livewire.site.components.dropdown');
    }
}
