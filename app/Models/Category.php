<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title', 'order', 'is_active',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
