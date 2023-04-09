<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category() {
        return $this->belongsTo(Category::Class);
    }

    public function user() {
        return $this->belongsTo(User::Class);
    }

    public function comment() {
        return $this->hasMany(Comment::Class);
    }

    
}
