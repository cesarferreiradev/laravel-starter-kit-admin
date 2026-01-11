<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUsers extends Component
{
    use WithPagination;
    public $search;

    public function mount()
    {
        $this->dispatch('set-title-header', 'Usuários');
    }

    public function render()
    {
        $users = $this->getUsers();
        return view('livewire.admin.users.index-users', compact('users'));
    }

    private function getUsers()
    {
        return User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->paginate(10);
    }
}
