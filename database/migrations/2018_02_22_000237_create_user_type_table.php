<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('user_type', function (Blueprint $table) {
        $table->increments('id');
        $table->timestamps();
        $table->integer('user_id')->unsigned();
        $table->integer('type_id')->unsigned();
        $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        $table->foreign('type_id')
                ->references('id')
                ->on('types')
                ->onDelete('restrict')
                ->onUpdate('cascade');
    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_role');
    }
}
