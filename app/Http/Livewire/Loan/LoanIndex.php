<?php

namespace App\Http\Livewire\Loan;

use App\Enums\LoanStatus;
use App\Models\Loan;
use Livewire\Component;

class LoanIndex extends Component
{
    public function render()
    {
        $loans = Loan::with(['customer'])->where('status',LoanStatus::PENDING)->paginate(10);
        return view('livewire.loan.loan-index', compact('loans'));
    }
}
