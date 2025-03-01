<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\Category;
use App\Models\User;


class contact extends Model
{
    use HasFactory;

    // 操作可能にしている
    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
        'details'
    ];


    // リレーション
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // リレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
