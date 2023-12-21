<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConnectionRequestModel extends Model
{
    use HasFactory;
    protected $table = 'connect_requests';
    public $timestamps = false;
}
