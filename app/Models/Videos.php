<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;

      protected $fillable = ['title', 'url' ] ;        
      protected $hidden = ['created_at', 'updated_at'];
}
