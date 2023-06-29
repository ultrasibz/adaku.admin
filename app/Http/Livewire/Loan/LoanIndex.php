<?php

namespace App\Http\Livewire\Loan;

use App\Enums\LoanStatus;
use App\Models\Loan;
use Livewire\Component;
use Livewire\WithPagination;

class LoanIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $loans = Loan::with(['customer'])->where('status', LoanStatus::PENDING)->paginate(10);
        return view('livewire.loan.loan-index', compact('loans'));
    }
}
