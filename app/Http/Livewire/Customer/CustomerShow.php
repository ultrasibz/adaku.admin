<?php

namespace App\Http\Livewire\Customer;

use App\Enums\LoanStatus;
use App\Models\Customer;
use App\Models\Loan;
use Livewire\Component;

class CustomerShow extends Component
{
    public Loan $loan;
    public Customer $customer;
    protected $listeners = ['update' => 'render'];


    public function mount(Customer $customer){
        //$this->loan = $loan;
        $this->customer = $customer;
    }

    public function render()
    {
        return view('livewire.customer.customer-show');
    }

}
