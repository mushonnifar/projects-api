<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_access_tokens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token',300);
            $table->integer('expires_at');
            $table->integer('user_id');
            $table->string('ipaddress',100);
            $table->string('app_id',200,NULL)->nullable();
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
        Schema::dropIfExists('std_access_tokens');
    }
}
