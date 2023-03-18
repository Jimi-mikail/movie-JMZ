<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemakaianwwtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemakaianwwtps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('inlet')->nullable();
            $table->bigInteger('outlet');
            $table->foreignId('item_wwtp_id')->nullable();
            $table->bigInteger('qty');
            $table->date('tanggal')->nullable();
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
        Schema::dropIfExists('pemakaianwwtps');
    }
}