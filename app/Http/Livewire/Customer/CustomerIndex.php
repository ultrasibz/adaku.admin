<?php

namespace App\Http\Livewire\Customer;

use App\Models\Loan;
use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $customers = customer::paginate(10);
        return view('livewire.customer.customer-index',compact('customers'));
    }
}
