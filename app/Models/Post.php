<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['author_id','title','content'];

    public function author(): BelongsTo{
        // decimos que returnamos este tipo de relacion
        return $this->belongsTo(User::class);
    }

    public function comments(): HasMany{
        return $this->hasMany(Comment::class);
    }
}
