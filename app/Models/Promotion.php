<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotions';

    protected $fillable = [
        'code',
        'pourcentage',
        'active',
        'expires_at',
    ];

    protected function casts(): array
    {
        return [
            'pourcentage' => 'integer',
            'active' => 'boolean',
            'expires_at' => 'datetime',
        ];
    }
}
