<?php

namespace App\Http\Livewire\Loan;

use App\Enums\LoanStatus;
use App\Models\Loan;
use Livewire\Component;

class LoanApproved extends Component
{
    public function render()
    {
        $loans = Loan::with(['customer'])->where('status',LoanStatus::APPROVED)->paginate(10);
        return view('livewire.loan.loan-approved', compact('loans'));
    }
}
