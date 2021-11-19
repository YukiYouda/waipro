<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'user_id',
        'recruitment_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function recruitment()
    {
        return $this->belongsTo(Recruitment::class);
    }
}
