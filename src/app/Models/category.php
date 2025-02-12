<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;



    // 操作可能にしている
    protected $fillable = ['content'];

    // リレーション
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
