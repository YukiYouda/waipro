<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'period',
        'number',
        'due_date',
        'gain',
        'caution',
        'comment',
        'user_id',
        'category_id',
    ];

    public function scopeOpenData(Builder $query)
    {
        $query->where('due_date', '>=', now());

        return $query;
    }

    public function scopeSearch(Builder $query, $params)
    {
        if(!empty($params['category'])) {
            $query->where('category_id', $params['category']);
        }

        return $query;
    }

    public function scopeMyRecruitment(Builder $query)
    {
        $query->where('user_id', auth()->user()->id);

        return $query;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function entries()
    {
        return $this->hasMany(Entry::class);
    }
}
