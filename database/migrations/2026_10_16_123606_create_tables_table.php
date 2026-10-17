<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color', 20);
            $table->string('image', 2048);
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_id')->constrained('categories')->restrictOnDelete();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('origin')->nullable();
            $table->string('unit', 100);
            $table->string('image', 2048);
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('salle_price')->nullable();
            $table->unsignedInteger('stock')->default(0);
            $table->unsignedInteger('version')->default(1);
            $table->boolean('active')->default(true);
            $table->boolean('feature')->default(false);
            $table->timestamps();

            $table->index(['active', 'categorie_id'], 'products_catalog_index');
        });

        Schema::create('deliveryzones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('fee')->nullable();
            $table->timestamps();
        });

        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('code', 50)->unique();
            $table->unsignedInteger('pourcentage');
            $table->boolean('active')->default(true);
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('reference', 50)->unique();
            $table->string('checkout_tocken')->unique();
            $table->foreignId('delivery_zone_id')->constrained('deliveryzones')->restrictOnDelete();
            $table->string('zone_name');
            $table->text('adresse')->nullable();
            $table->string('fulfillment_mode', 20);
            $table->text('note')->nullable();
            $table->unsignedBigInteger('sous_total');
            $table->unsignedTinyInteger('discont_pourcentage')->default(0);
            $table->unsignedBigInteger('discount_amount')->default(0);
            $table->unsignedInteger('delivery_fee')->default(0);
            $table->string('status', 30)->default('EN_ATTENTE');
            $table->boolean('stock_applied')->default(false);
            $table->boolean('stock_restored')->default(false);
            $table->timestamp('cancel_at')->nullable();
            $table->timestamps();

            $table->index(['status', 'created_at'], 'commande_catalog_index');
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->restrictOnDelete();
            $table->foreignId('product_id')->constrained('products')->restrictOnDelete();
            $table->string('name');
            $table->string('unit', 100);
            $table->unsignedBigInteger('unit_price');
            $table->unsignedInteger('quantite');
            $table->unsignedBigInteger('line_total');
            $table->timestamps();

            $table->unique(['order_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('products');
        Schema::dropIfExists('promotions');
        Schema::dropIfExists('deliveryzones');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('users');
    }
};
