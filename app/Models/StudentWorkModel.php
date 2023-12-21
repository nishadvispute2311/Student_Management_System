<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentWorkModel extends Model
{
    use HasFactory;
    protected $table = 'student_job';
    public $timestamps = false;
}
