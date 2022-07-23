<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemVariant extends Model
{
    use HasFactory;

    use SoftDeletes;

    public $dates = [
        'use_by',
    ];

    public function baseItem(): BelongsTo
    {
        return $this->belongsTo(related: Item::class);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(related: Location::class);
    }
}
