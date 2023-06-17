<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForoPruebas extends Model
{
    use HasFactory;

    public string $title;
    public string $slug;
    public string $description;
    public string $content;
    public string $image;
    public bool $is_published;
    public string $pusblished_at;
    public int $category_id;
    public int $user_id;

    /**
     * @param string $title
     * @param string $slug
     * @param string $description
     * @param string $content
     * @param string $image
     * @param bool $is_published
     * @param string $pusblished_at
     * @param int $category_id
     * @param int $user_id
     */
    protected  $fillable = ['title', 'slug', 'description', 'content', 'image', 'is_published', 'published_at', 'category_id', 'user_id'];

    public function __construct(array $datos)
    {
        $this->title = $datos['title'];
        $this->slug = $datos['slug'];
        $this->description = $datos['description'];
        $this->content = $datos['content'];
        $this->image = $datos['image'];
        $this->is_published = $datos['is_published'];
        $this->pusblished_at = $datos['published_at'];
        $this->category_id = $datos['category_id'];
        $this->user_id = $datos['user_id'];
    }
}
