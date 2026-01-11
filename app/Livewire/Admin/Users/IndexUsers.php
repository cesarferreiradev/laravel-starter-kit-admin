<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;

class IndexUsers extends Component
{
    public function mount()
    {
        $this->dispatch('set-title-header', 'Usuários');
    }

    public function render()
    {
        return view('livewire.admin.users.index-users');
    }
}
