<?php

namespace App\Livewire\Admin\Layout;

use Livewire\Attributes\On;
use Livewire\Component;

class HeaderAdmin extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.admin.layout.header-admin');
    }

    #[On('set-title-header')]
    public function setTitle($title): void
    {
        $this->title = $title;
    }
}
