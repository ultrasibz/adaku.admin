<?php

namespace App\Http\Livewire\Profile;

use App\Models\Customer;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileEdit extends Component
{
    use WithFileUploads;

    public Customer $customer;
    public $photo, $nrc,$payslip,$proof_of_residence,$collateral;

    public function mount()
    {
        $this->customer = auth()->user();
    }

    protected function rules()
    {
        return [
            'customer.nrc' => [
                'required',
                'regex:/^\d{6}(\/)\d{2}(\/)\d{1}$/',
                'string',
                'string',
                'max:11',
                Rule::unique(Customer::class, 'nrc')->ignore(auth()->id()),
            ],
            'customer.firstname' => ['required', 'string', 'max:255'],
            'customer.lastname' => ['required', 'string', 'max:255'],
            'customer.mobile' => ['required', 'numeric', Rule::unique(Customer::class, 'mobile')->ignore(auth()->id())],
            'customer.email' => 'required',
            'customer.occupation' => ['required'],
            'customer.country' => ['required'],
            'customer.area' => ['required'],
            'customer.town' => ['required'],
            'customer.province' => ['required'],
            'customer.nationality' => ['required'],
            'customer.address' => ['required', 'string', 'max:255'],
            'customer.place_of_work' => ['required'],
            'photo' => 'nullable|max:1024', // 1MB Max
            'nrc' => 'nullable|max:1024', // 1MB Max
            'payslip' => 'nullable|max:1024', // 1MB Max
            'collateral' => 'nullable|max:1024', // 1MB Max
            'proof_of_residence' => 'nullable|max:1024', // 1MB Max
        ];
    }
//    protected $validationAttributes = [
//        'email' => 'email address'
//    ];
    public function render()
    {
        return view('livewire.profile.profile-edit');
    }

    public function save()
    {
        $this->validate();
        $this->customer->is_complete = true;
        $this->customer->save();
        if ($this->photo) {
            $this->customer->addMediaFromUrl($this->photo->temporaryUrl())->toMediaCollection('avatar');
        }

        if ($this->nrc) {
            $this->customer->addMediaFromUrl($this->nrc->temporaryUrl())->toMediaCollection('nrc');
        }
        $this->emit('success', 'Profile Edited successfully');
    }
}
