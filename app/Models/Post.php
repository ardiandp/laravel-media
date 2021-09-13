<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'tb_post';
    protected $primaryKey = 'post_id';

    protected $fillable = [
        'post_title',
        'category',
        'image',
        'content',
    ];

    function image()
    {
        if ($this->image && file_exists(public_path('public/storage/post/' . $this->image)))
            return asset('public/storage/post/'.$this->image);
        else
            return asset('public/storage/post/no_image.png');
    }

    function delete_image()
    {
        if ($this->image && file_exists(public_path('public/storage/post/' . $this->image)))
            return unlink(public_path('public/storage/post/' . $this->image));
    }
}
