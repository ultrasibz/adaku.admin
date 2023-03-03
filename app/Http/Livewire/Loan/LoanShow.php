<?php

namespace App\Http\Livewire\Loan;

use App\Enums\LoanStatus;
use App\Models\Customer;
use App\Models\Loan;
use Livewire\Component;

class LoanShow extends Component
{
    public Loan $loan;
    public Customer $customer;
    protected $listeners = ['update' => 'render'];


    public function mount(Loan $loan){
        $this->loan = $loan;
        $this->customer = $loan->customer;
    }

    public function render()
    {
        return view('livewire.loan.loan-show');
    }

    public function approve()
    {
        $this->loan->status = LoanStatus::APPROVED;
        $this->loan->save();
        $this->dispatchBrowserEvent('alert', ['type' => 'success','text'=>'Loan Approved Successfully']);
    }

    public function reject()
    {
        $this->loan->status = LoanStatus::APPROVED;
        $this->loan->save();
        $this->dispatchBrowserEvent('alert', ['type' => 'success','text'=>'Loan Rejected Successfully']);
    }
}
