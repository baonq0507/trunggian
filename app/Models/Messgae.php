<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messgae extends Model
{
    protected $fillable = ['channel_id', 'user_id', 'message', 'type', 'file_path', 'file_name', 'file_type', 'file_size', 'file_extension', 'file_url', 'is_read'];

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    public function scopeRead($query)
    {
        return $query->where('is_read', true);
    }
}
