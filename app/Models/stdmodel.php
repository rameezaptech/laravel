<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stdmodel extends Model
{
    use HasFactory;
    
    protected $table = 'std';
    protected $primarykey = 'id';
    
}
