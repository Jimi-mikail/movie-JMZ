<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('departemen_id');
            $table->integer('is_admin');
            $table->integer('nik')->unique();
            $table->string('email')->nullable();
            $table->string('ttl')->nullable();
            $table->string('tempat')->nullable();
            $table->string('sekolah')->nullable();
            $table->string('departemen')->nullable();
            $table->string('image')->nullable();
            $table->string('departemen_code')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
