<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductyongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productyong', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_code')->nullable();
            $table->longText('name')->nullable();
            $table->string('type')->nullable();
            $table->integer('purchase_price')->nullable();
            $table->integer('available_amount')->nullable();
            $table->string('purchase_unit')->nullable();
            $table->string('packing_purchase')->nullable();
            $table->integer('retail_price')->nullable();
            $table->string('retail_unit')->nullable();
            $table->string('retail_packing')->nullable();
            $table->softDeletes();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productyong');
    }
}
