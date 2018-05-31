<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolemenuhasactionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('std_rolemenuhasaction', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rolemenu_id')->unsigned();
            $table->integer('action_id')->unsigned();
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->timestamps();
            $table->foreign('rolemenu_id')->references('id')->on('std_rolehasmenu');
            $table->foreign('action_id')->references('id')->on('std_actions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('std_rolemenuhasaction');
    }

}
