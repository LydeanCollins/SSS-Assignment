<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = [
        'build_id',
        'component_category_id',
        'name',
        'price',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function build(): BelongsTo
    {
        return $this->belongsTo(Build::class);
    }

    public function componentCategory(): BelongsTo
    {
        return $this->belongsTo(ComponentCategory::class);
    }
}
