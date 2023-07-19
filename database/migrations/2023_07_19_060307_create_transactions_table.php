<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade')->onUpdate(' cascade');
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade')->onUpdate(' cascade');
            $table->string('weight');
            $table->string('totalTransaction');
            $table->string('costumer');
            $table->string('telp');
            $table->string('address');
            $table->boolean('payment');
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('transactions');
    }
}
