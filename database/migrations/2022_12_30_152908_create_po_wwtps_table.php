<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoWwtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('po_wwtps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('harga_po')->nullable();
            $table->foreignId('item_wwtp_id');
            $table->bigInteger('qty_po');
            $table->text('no_po')->nullable();
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
        Schema::dropIfExists('po_wwtps');
    }
}
