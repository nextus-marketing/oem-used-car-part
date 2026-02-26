<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOtp extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'otp', 'expires_at', 'is_used'];

    public function isExpired()
    {
        return Carbon::now()->greaterThan($this->expires_at);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
