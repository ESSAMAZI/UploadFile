<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class files extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'id','file'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];
   // public $timestamps=false;
}
