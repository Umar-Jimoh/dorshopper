<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class category extends Model
{
    public function parent(): BelongsTo  {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
