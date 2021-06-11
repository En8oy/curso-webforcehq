<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function posts()
    {
        return $this->hasMany(Post::class)->select('id', 'category_id', 'user_id', 'title', 'slug', 'short', 'created_at')->with(['user' => function($q){
            $q->select('id', 'username', 'name');
        }]);
    }
}
