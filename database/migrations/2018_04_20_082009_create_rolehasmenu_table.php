<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolehasmenuTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('std_rolehasmenu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->integer('menu_id')->unsigned();
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('std_roles');
            $table->foreign('menu_id')->references('id')->on('std_menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('std_rolehasmenu');
    }

}
