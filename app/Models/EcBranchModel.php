<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcBranchModel extends Model
{
    use HasFactory;
    protected $table = 'exam_coordinator';
    public $timestamps = false;
}
