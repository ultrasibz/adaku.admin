<?php

namespace App\Http\Livewire\Customer;

use App\Models\Loan;
use App\Models\Customer;
use Livewire\Component;

class CustomerIndex extends Component
{
    public function render()
    {
        $customers = customer::all();
        return view('livewire.customer.customer-index',compact('customers'));
    }
}
