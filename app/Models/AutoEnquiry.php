<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class AutoEnquiry extends BaseModel
{
    use HasFactory;
     protected $fillable = ['full_name', 'email', 'mobile', 'zip', 'vehicle_model', 'vehicle_year', 'part_name','make','vehicle_part'];
}
