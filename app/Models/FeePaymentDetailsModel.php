<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeePaymentDetailsModel extends Model
{
    use HasFactory;
    protected $table = 'fee_payment_details';
    public $timestamps = false;
}
