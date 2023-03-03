<?php

namespace App\Models;

use App\Enums\LoanStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Loan extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $casts = [
        'date_due' => 'date:Y-m-d',
        'status' => LoanStatus::class
    ];
    protected $fillable = [
        'principal',
        'interest',
        'amount_due',
        'date_due',
        'balance'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    protected function amountOwed(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->principal + ($this->interest/100 * $this->principal),
        );
    }

    protected function balance(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->amount_owed - $this->payments->sum('amount'),
        );
    }

    protected function interestDisplay(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->interest * 100,
        );
    }

    protected function interest(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value * 100,
            set: fn ($value) => $value / 100,
        );
    }

//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }
}
