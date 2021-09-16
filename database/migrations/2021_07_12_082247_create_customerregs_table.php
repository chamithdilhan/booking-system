<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerregsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerregs', function (Blueprint $table) {
            $table->id();
            $table->string('cus_name')->nullable();
            $table->string('cus_nic')->nullable();
            $table->string('cus_address')->nullable();
            $table->string('cus_nu')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('customerregs');
    }
}
