<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCusassginroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusassginrooms', function (Blueprint $table) {
            $table->id();
            $table->string('cus_id');
            $table->string('room_id');
            $table->dateTime('start_date',0);
            $table->dateTime('end_date',0);
            $table->dateTime('exit_date',0);
            $table->string('amount')->nullable();
            $table->integer('status');
            $table->string('entered_by');
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
        Schema::dropIfExists('cusassginrooms');
    }
}
