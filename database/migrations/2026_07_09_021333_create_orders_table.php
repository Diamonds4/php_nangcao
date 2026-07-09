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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('payment_amount', 255);
            $table->integer('sub_total');
            $table->integer('tax');
            $table->integer('discount');
            $table->integer('service_charge');
            $table->integer('total');
            $table->integer('payment_method');
            $table->integer('total_item');
            $table->integer('id_kasir');
            $table->string('nama_kasir');
            $table->string('transaction_time');
            $table->enum('order_type',['dinein','reservasi'])->nullable();
            $table->unsignedBigInteger('id_reservasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
