<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger( 'created_uid' )->nullable();
            $table->unsignedInteger( 'update_uid' )->nullable();

            //Campos
            $table->string( 'document_type');
            $table->string( 'name');
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
        Schema::dropIfExists('documents');
    }
}
