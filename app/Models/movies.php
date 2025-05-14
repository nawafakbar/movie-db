<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    /** @use HasFactory<\Database\Factories\MoviesFactory> */
    use HasFactory;
    protected $fillable = [
    'title',
    'slug',
    'synopsis',
    'category_id',
    'year',
    'actors',
    'cover_image',
    ];
    public function categories(): BelongsTo
    {
        return $this->belongsTo(categories::class, 'category_id');
    }
}
