<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserVerify extends Model
{
    protected $fillable = ['user_id','token','is_used'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function scopeNotUsed($query)
    {
        return $query->where('is_used',false);
    }

    public function scopeUsed($query)
    {
        return $query->where('is_used',true);
    }
}
