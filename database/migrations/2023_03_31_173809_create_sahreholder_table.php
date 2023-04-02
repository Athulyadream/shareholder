<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSahreholderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sahreholder', function (Blueprint $table) {
            $table->id();
            $table->string('buyerid');
            $table->string('duration');
            $table->string('installmenttype');
            $table->string('paymentmode');
            $table->string('totalamount');
            $table->date('startdate');
            $table->string('staff');
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
        Schema::dropIfExists('sahreholder');
    }
}
