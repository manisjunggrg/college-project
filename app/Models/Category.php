<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'parent_id', 'level', 'banner', 'icon', 'order',
        'status', 'seo_title', 'seo_description', 'created_by', 'is_shown', 'slug'
    ];

    /**
     * @return BelongsTo
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
