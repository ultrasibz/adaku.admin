<?php

namespace App\Http\Livewire\Loan;

use App\Enums\LoanStatus;
use App\Models\Loan;
use Livewire\Component;
use Livewire\WithFileUploads;

class LoanAdd extends Component
{
    use WithFileUploads;

    public Loan $loan;

    public $collaterals = [], $duration;

    public function mount(){
        $this->loan = new Loan();
    }

    protected function rules()
    {
        return [
            'loan.principal' => 'required|numeric',
            'loan.date_due' => 'required|date|after:now',
            'collaterals.*' => 'required|image|max:1024',
        ];
    }

    public function render()
    {
        return view('livewire.loan.loan-add');
    }

    public function save()
    {
        $this->validate();
//        $this->loan->date_due = now()->startOfDay()->addWeekdays($this->duration);
        $this->loan->status = LoanStatus::PENDING;
        $this->interest = 70;
        auth()->user()->loans()->save($this->loan);
        foreach ($this->collaterals as $collateral) {
            $this->loan->addMediaFromUrl($collateral->temporaryUrl())->toMediaCollection('collateral');
        }
        $this->redirect(route('loan.index'));
    }
}
