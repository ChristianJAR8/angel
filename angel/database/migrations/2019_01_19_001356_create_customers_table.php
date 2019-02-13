<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            //General
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger( 'created_uid' )->nullable();
            $table->unsignedInteger( 'update_uid' )->nullable();


            //Campos
            $table->string( 'name');
            $table->string( 'taxid',  15 )->nullable();
            $table->string( 'email')->nullable();
            $table->string( 'phone')->nullable();
            $table->boolean( 'is_company')->default(TRUE);
            $table->boolean( 'status')->default(TRUE);
            $table->text( 'adress' )->nullable();;
            $table->string( 'comercial_name')->nullable();;

            //Index
            $table->index(  'id',  'id',  'BTREE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
