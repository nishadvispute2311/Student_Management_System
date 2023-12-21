<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAchievementModel extends Model
{
    use HasFactory;
    protected $table = 'student_achievements';
    public $timestamps = false;
}
