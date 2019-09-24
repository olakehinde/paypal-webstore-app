<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            // store dta returned by paypal API
            $table->string('customer_id')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('country_code')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('currency')->nullable();
            $table->string('payment_status')->nullable();
            $table->double('price', 2);
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
        Schema::dropIfExists('invoices');
    }
}
