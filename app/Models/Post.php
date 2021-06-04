<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Psy\Util\Str;

class Post extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'content',
        'featured_image',
        'user_id',
        'time_to_read',
        'seo_keywords',
        'post_category_id',
        'status'
    ];


    /**
     * @var string[]
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getContentIntroAttribute($value)
    {
        return \Str::words($this->content, 50);
    }
}
