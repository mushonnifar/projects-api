<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolehasrouteTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('std_rolehasroute', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->integer('route_id')->unsigned();
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('std_roles');
            $table->foreign('route_id')->references('id')->on('std_routes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('std_rolehasroute');
    }

}
