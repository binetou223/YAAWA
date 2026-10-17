<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\DeliveryZone;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $cheminPath = database_path('data/demo.json');

        if (!File::exists($cheminPath)) {
            $this->command->error("Fichier introuvable : {$cheminPath}");
            return;
        }
        $data = json_decode(File::get($cheminPath), true);

        User::updateOrCreate(
            ['email' => 'admin@yaawa.sn'],
            [
                'name' => 'Ya Awa',
                'password' => Hash::make('Yaawa22'),
                'is_admin' => true,
            ]
        );
        foreach ($data['categories'] ?? [] as $cat) {
            Category::updateOrCreate(
                ['id' => $cat['id']],
                [
                    'name' => $cat['name'],
                    'color' => $cat['color'],
                    'image' => $cat['image'],
                ]
            );
        }

        foreach ($data['deliveryZones'] ?? [] as $zone) {
            DeliveryZone::updateOrCreate(
                ['id' => $zone['id']],
                [
                    'name' => $zone['name'],
                    'fee' => $zone['fee'],
                ]
            );
        }


        foreach ($data['products'] ?? [] as $prod) {
            Product::updateOrCreate(
                ['id' => $prod['id']],
                [
                    'categorie_id' => $prod['categoryId'],
                    'name'         => $prod['name'],
                    'description'  => $prod['description'] ?? null,
                    'origin'       => $prod['origin'] ?? null,
                    'unit'         => $prod['unit'],
                    'image'        => $prod['image'],
                    'price'        => $prod['price'],
                    'salle_price'  => $prod['salePrice'] ?? null,
                    'stock'        => $prod['stock'] ?? 0,
                    'active'       => $prod['active'] ?? true,
                    'feature'      => $prod['featured'] ?? false,
                ]
            );
        }

        foreach ($data['promotions'] ?? [] as $promo) {
            Promotion::updateOrCreate(
                ['id' => $promo['id']],
                [
                    'code'        => $promo['code'],
                    'pourcentage' => $promo['percentage'],
                    'active'      => $promo['active'] ?? true,
                    'expires_at'  => $promo['expiresAt'] ?? null,
                ]
            );
        }
        foreach ($data['orders'] ?? [] as $orderData) {
            $order = Order::updateOrCreate(
                ['reference' => $orderData['reference']],
                [
                    'checkout_tocken'     => Str::uuid()->toString(),
                    'delivery_zone_id'    => $orderData['customer']['zoneId'],
                    'zone_name'           => $orderData['customer']['zoneName'],
                    'adresse'             => $orderData['customer']['address'] ?? null,
                    'fulfillment_mode'    => $orderData['fulfillmentMode'],
                    'note'                => $orderData['note'] ?? null,
                    'sous_total'          => $orderData['subtotal'],
                    'discont_pourcentage' => $orderData['discount']['percentage'] ?? 0,
                    'discount_amount'     => $orderData['discount']['amount'] ?? 0,
                    'delivery_fee'        => $orderData['deliveryFee'] ?? 0,
                    'status'              => $orderData['status'] ?? 'EN_ATTENTE',
                    'stock_applied'       => $orderData['stockApplied'] ?? false,
                    'stock_restored'      => $orderData['stockRestored'] ?? false,
                    'created_at'          => $orderData['createdAt'] ?? now(),
                    'updated_at'          => $orderData['updatedAt'] ?? now(),
                ]
            );


            foreach ($orderData['items'] ?? [] as $item) {
                OrderItem::updateOrCreate(
                    [
                        'order_id'   => $order->id,
                        'product_id' => $item['productId'],
                    ],
                    [
                        'name'       => $item['name'],
                        'unit'       => $item['unit'],
                        'unit_price' => $item['unitPrice'],
                        'quantite'   => $item['quantity'],
                        'line_total' => $item['lineTotal'],
                    ]
                );
            }
        }
        $this->command->info('Base de données initialisée avec succès depuis demo.json !');
    }
}
