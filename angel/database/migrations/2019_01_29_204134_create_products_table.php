<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            //Generales
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger( 'created_uid' )->nullable();
            $table->unsignedInteger( 'update_uid' )->nullable();
            //Campos
            $table->string( 'description');
            $table->string( 'image' );
            $table->string( 'type');
            $table->boolean( 'status')->default(TRUE);

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
        Schema::dropIfExists('products');
    }
}
