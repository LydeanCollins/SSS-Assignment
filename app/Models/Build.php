<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function components(): HasMany
    {
        return $this->hasMany(Component::class);
    }
}
