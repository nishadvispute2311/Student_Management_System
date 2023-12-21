<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTotalResultModel extends Model
{
    use HasFactory;
    protected $table = 'student_total_result';
    public $timestamps = false;
}
