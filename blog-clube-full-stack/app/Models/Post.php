<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected string $title;
    protected string $slug;
    protected ?int $thumb_id;
    protected string $content;

    protected $fillable =[
        'title',
        'slug',
        'thumb_id',
        'content'
    ];

    public function thumb()
    {
        return $this->belongsTo(Media::class, 'thumb_id', 'id');
    }


}
