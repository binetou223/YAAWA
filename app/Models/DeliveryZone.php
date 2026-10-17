<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DeliveryZone extends Model
{
    protected $table = 'deliveryzones';

    protected $fillable = [
        'name',
        'fee',
    ];

    protected function casts(): array
    {
        return [
            'fee' => 'integer',
        ];
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'delivery_zone_id');
    }
}
