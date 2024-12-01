<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /** @use HasFactory<\Database\Factories\VideoFactory> */
    use HasFactory;
    protected $fillable = ['title', 'url'];

    /**
     * Define la relación polimórfica.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->chaperone();
    }
}
