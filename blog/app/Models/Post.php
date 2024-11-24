<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected string $title;
    protected string $slug;
    protected ?int $media_id;
    protected ?int $status_id;
    protected ?int $category_id;
    protected int $post_type_id;
    protected int $user_id;
    protected string $content;

    protected $fillable =[
        'title',
        'slug',
        'media_id',
        'status_id',
        'category_id',
        'post_type_id',
        'user_id',
        'content'
    ];

    public function thumb()
    {
        return $this->belongsTo(Media::class, 'media_id', 'id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function post_type()
    {
        return $this->belongsTo(PostType::class, 'post_type_id', 'id');
    }


}
