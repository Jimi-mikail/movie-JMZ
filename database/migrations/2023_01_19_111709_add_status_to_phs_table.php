<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToPhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phs', function (Blueprint $table) {
            $table->bigInteger('cod')->nullable();
            $table->bigInteger('bod')->nullable();
            $table->bigInteger('tds')->nullable();
            $table->bigInteger('tss')->nullable();
            $table->bigInteger('color')->nullable();
            $table->bigInteger('do')->nullable();
            $table->bigInteger('sv30')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('phs', function (Blueprint $table) {
            //
        });
    }
}