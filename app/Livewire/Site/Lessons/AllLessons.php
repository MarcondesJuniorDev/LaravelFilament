<?php

namespace App\Livewire\Site\Lessons;

use Illuminate\View\View;
use Livewire\Component;

class AllLessons extends Component
{
    public function render(): View
    {
        return view('livewire.site.lessons.elementary.partials.all-lessons');
    }
}
