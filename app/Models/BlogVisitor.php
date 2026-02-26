<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogVisitor extends Model
{
   use HasFactory;
    protected $fillable = ['blog_id','ip_address'];
    
}
