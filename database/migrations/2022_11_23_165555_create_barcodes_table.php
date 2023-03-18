<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barcodes', function (Blueprint $table) {
            $table->id();
            $table->text('d_barcode');
            $table->text('customer_name');
            $table->text('style_no');
            $table->text('opo');
            $table->text('combo_id');
            $table->text('size_no');
            $table->text('lot_no');
            $table->text('brand_seq');
            $table->text('qty');
            $table->text('barcode');
            $table->text('pn_no');
            $table->text('h_barcode');
            $table->text('user_id');
            $table->foreignId('weaving_number')->onDelete('cascade');
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
        Schema::dropIfExists('barcodes');
    }
}
