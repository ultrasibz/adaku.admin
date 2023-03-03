<?php

namespace App\Http\Livewire\Payment;

use App\Models\Loan;
use Livewire\Component;

class PaymentIndex extends Component
{
    public Loan $loan;


    public function render()
    {
        $payments = $this->loan->payments()->latest()->get();
        return view('livewire.payment.payment-index',compact('payments'));
    }
}
