<?php

namespace App\Models;

use App\Traits\Hashidable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BaseModel extends Model
{
    use HasFactory, Hashidable;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $user = Auth::user();
            if ($user) {
                $model->created_by = $user->id;
                $model->updated_by = $user->id;
            }
        });

        static::updating(function ($model) {
            $user = Auth::user();
            if ($user) {
                $model->updated_by = $user->id;
            }
        });
    }

    public function createdBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'updated_by');
    }

    public function creatorName()
    {
        if ($this->created_by != null && $this->createdBy) {
            return $this->createdBy->first_name . " " . $this->createdBy->last_name;
        }

        return '';
    }

    public function updatorName()
    {
        if ($this->updated_by != null && $this->updatedBy) {
            return $this->updatedBy->first_name . " " . $this->updatedBy->last_name;
        }

        return '';
    }
}
