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
            $table->id();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->date('late_date')->nullable();
            $table->integer('status');
            $table->float('all_price');
            $table->float('delivery_price')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('address');
            $table->string('pay_type');
            $table->string('sequence_number');
            $table->unsignedBigInteger('payme_history_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
