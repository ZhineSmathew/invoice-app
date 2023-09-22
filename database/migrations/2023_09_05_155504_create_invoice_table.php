<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->integer('qty');
            $table->decimal('amount');
            $table->decimal('total_amount');
            $table->decimal('tax_percentage');
            $table->decimal('tax_amount');
            $table->decimal('net_amount');
            $table->string('customer_name');
            $table->date('invoice_date');
            $table->string('customer_email');
            $table->string('file_upload'); // You can store the file path or file name here.
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
        Schema::dropIfExists('invoice');
    }
};
