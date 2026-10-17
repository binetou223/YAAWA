<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'reference',
        'checkout_tocken',
        'delivery_zone_id',
        'zone_name',
        'adresse',
        'fulfillment_mode',
        'note',
        'sous_total',
        'discont_pourcentage',
        'discount_amount',
        'delivery_fee',
        'status',
        'stock_applied',
        'stock_restored',
        'cancel_at',
        'create_at',
    ];

    protected function casts(): array
    {
        return [
            'sous_total' => 'integer',
            'discont_pourcentage' => 'integer',
            'discount_amount' => 'integer',
            'delivery_fee' => 'integer',
            'stock_applied' => 'boolean',
            'stock_restored' => 'boolean',
            'cancel_at' => 'datetime',
            'create_at' => 'datetime',
        ];
    }

    public function deliveryZone(): BelongsTo
    {
        return $this->belongsTo(DeliveryZone::class, 'delivery_zone_id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
