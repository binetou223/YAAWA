<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'categorie_id',
        'name',
        'description',
        'origin',
        'unit',
        'image',
        'price',
        'salle_price',
        'stock',
        'version',
        'active',
        'feature',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'integer',
            'salle_price' => 'integer',
            'stock' => 'integer',
            'version' => 'integer',
            'active' => 'boolean',
            'feature' => 'boolean',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'categorie_id');
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
