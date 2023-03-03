<?php

namespace App\Http\Livewire\Payment;

use App\Models\Loan;
use App\Models\Payment;
use Livewire\Component;

class PaymentAdd extends Component
{
    public Loan $loan;
    public Payment $payment;

    public function mount(){
        $this->payment = new Payment();
    }

    protected $rules = [
        'payment.amount' => 'required|numeric',
        'payment.comments' => 'required'
    ];

    public function render()
    {
        return view('livewire.payment.payment-add');
    }

    public function save(){
        $this->validate();

        if($this->payment->amount > $this->loan->installment){
            $this->payment->amount -= $this->loan->installment;
            $this->loan->principal -= $this->payment->amount;
            $this->payment->amount = $this->loan->installment;
        }

        $this->loan->payments()->save($this->payment);
        $this->loan->save();
        $this->payment = new Payment();
        $this->dispatchBrowserEvent('modal-close');
        $this->dispatchBrowserEvent('alert', ['type' => 'success','text'=>'Loan Edited Successfully']);
        $this->emit('update');

    }
}
