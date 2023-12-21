<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSkillRankingModel extends Model
{
    use HasFactory;
    protected $table = 'student_ranking';
    public $timestamps = false;
}
