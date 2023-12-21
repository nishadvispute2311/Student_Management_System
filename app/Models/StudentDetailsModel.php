<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetailsModel extends Model
{
    use HasFactory;
    protected $table = 'student_details';
    public $timestamps = false;
}
