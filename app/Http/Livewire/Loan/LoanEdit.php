<?php

namespace App\Http\Livewire\Loan;

use App\Enums\LoanStatus;
use App\Models\Loan;
use Livewire\Component;
use Livewire\WithFileUploads;

class LoanEdit extends Component
{
    use WithFileUploads;

    public Loan $loan;

    public $collaterals = [], $duration;

    public function mount(Loan $loan)
    {
        $this->loan = $loan;
    }

    protected function rules()
    {
        return [
            'loan.principal' => 'required|numeric',
            'loan.date_due' => 'required|date|after:now',
            'loan.installment' => 'required|numeric'
        ];
    }

    public function render()
    {
        return view('livewire.loan.loan-edit');
    }

    public function save()
    {
        $this->validate();
        $this->loan->save();
        $this->dispatchBrowserEvent('alert', ['type' => 'success','text'=>'Loan Edited Successfully']);

    }


}
