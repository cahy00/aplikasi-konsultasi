<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'category_id', 'title', 'slug', 'content', 'status', 'is_headline', 'thumbnail'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

		public function scopeDataSide($query, $limit = 6)
		{
			return $query->with('categories')
            ->where('category_id', 1)
            ->orderBy('created_at', 'desc')
            ->take($limit);
		}
}
