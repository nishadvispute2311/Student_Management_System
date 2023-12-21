<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffDetailsModel extends Model
{
    use HasFactory;
    protected $table = 'staff_details';
    public $timestamps = false;
}
