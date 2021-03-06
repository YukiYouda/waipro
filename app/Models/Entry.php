<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = [
        'recruitment_id',
        'user_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function recruitment()
    {
        return $this->belongsTo(Recruitment::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
