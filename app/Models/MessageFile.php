<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Message;
class MessageFile extends Model
{
    protected $table = 'message_files';
    protected $fillable = ['message_id', 'file_name', 'file_type', 'file_url'];

    public function message()
    {
        return $this->belongsTo(Messgae::class);
    }
}
