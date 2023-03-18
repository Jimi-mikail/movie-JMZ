<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventoris', function (Blueprint $table) {
            $table->id();
            $table->text('acce_qty');
            $table->text('acce_code');
            $table->text('acce_kind');
            $table->text('acce_name');
            $table->text('acce_spec')->nullable();
            $table->text('acce_desc')->nullable();
            $table->text('acce_color')->nullable();
            $table->text('acce_size')->nullable();
            $table->text('acce_idp');
            $table->text('acce_kategori');
            $table->text('acce_supplier');
            $table->text('acce_warehouse');
            $table->text('acce_warehouse_detail');
            $table->text('acce_po');
            $table->text('acce_price');
            $table->text('acce_npb');
            $table->integer('acce_status')->nullable();
            $table->text('acce_lokasi')->nullable();
            $table->text('acce_keterangan')->nullable();
            $table->bigInteger('acce_id')->unique();
            $table->text('acce_stock')->nullable();
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
        Schema::dropIfExists('inventoris');
    }
}
