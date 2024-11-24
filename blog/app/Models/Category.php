<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected string $title;
    protected string $slug;
    protected ?int $media_id;
    protected int $status_id;
    protected int $user_id;
    protected string $content;

    protected $fillable =[
        'title',
        'slug',
        'media_id',
        'status_id',
        'category_id',
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

}
