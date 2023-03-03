<?php

namespace App\Http\Livewire\User;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Auth\Passwords\PasswordBroker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserAdd extends Component
{
    public User $user;

    public function mount()
    {
        $this->user = new User();
    }

    protected function rules()
    {
        return [
            'user.firstname' => ['required', 'string', 'max:255'],
            'user.lastname' => ['required', 'string', 'max:255'],
//            'user.mobile' => ['required', 'numeric', Rule::unique(user::class, 'mobile')->ignore(auth()->id())],
            'user.email' => 'required',
        ];
    }
//    protected $validationAttributes = [
//        'email' => 'email address'
//    ];
    public function render()
    {
        return view('livewire.user.user-add');
    }

    public function save()
    {
        $this->validate();
        $this->user->password = Hash::make(Str::random(10));
        $this->user->save();
        $token = app(PasswordBroker::class)->createToken($this->user);
        $this->user->sendPasswordResetNotification($token);
        $this->user = new User();
        $this->emit('success', 'User added successfully');
    }
}
