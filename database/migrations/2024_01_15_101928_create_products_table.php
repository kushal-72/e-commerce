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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_category_id')->constrained()->onDelete('cascade');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('stock_quantity')->nullable();
            $table->foreignId('product_color_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_material_type_id')->constrained()->onDelete('cascade'); //cotton,silk etc
            $table->string('size')->nullable(); // xs, s, m, l, xl, xxl, xxxl, 
            $table->string('pattern')->nullable(); //solid and printed
            $table->text('additional_info')->nullable();
            $table->text('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
