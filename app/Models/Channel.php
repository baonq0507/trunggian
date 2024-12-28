<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Channel extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'image', 'is_private', 'is_active', 'status', 'type', 'created_by', 'amount'];

    const STATUS = [
        'pending' => 'Đang chờ xác nhận',
        'trading' => 'Đang giao dịch',
        'completed' => 'Đã hoàn thành',
        'cancelled' => 'Đã hủy',
        'report' => 'Đã báo cáo',
    ];

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function userChannels(): HasMany
    {
        return $this->hasMany(UserChannel::class);
    }

    //slug = random 6 character

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($channel) {
            do {
                // Tạo UUID mới
                $uuid = (string) Str::uuid();
            } while (self::where('slug', $uuid)->exists()); // Kiểm tra trong DB

            $channel->slug = $uuid; // Gán giá trị cho slug
        });
    }
}
