<?php

namespace App\Http\Livewire\User;

use App\Models\Loan;
use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.user.user-index',compact('users'));
    }
}
