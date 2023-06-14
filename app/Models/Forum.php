<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;



class Forum extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'content', 'image', 'is_published', 'pusblished_at', 'category_id', 'user_id'];


    public function imageUrl(): Attribute
    {
        return new Attribute(
            get: function () {
                return $this->image ? Storage::url($this->image) : 'https://www.eltiempo.com/files/image_1200_680/uploads/2019/12/07/5dec47012d257.jpeg';
            }
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
