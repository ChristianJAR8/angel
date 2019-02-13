<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger( 'created_uid' )->nullable();
            $table->unsignedInteger( 'update_uid' )->nullable();
            //campos

            $table->unsignedInteger('folio');
            $table->date('date');
            $table->unsignedInteger( 'id_customer' )->nullable();
            $table->decimal('iva');
            $table->decimal('subtotal');
            $table->decimal('amount');
            $table->boolean('status');
            $table->string('tax_id',13);
            $table->decimal('discount');
            $table->string('comments');
            $table->date('date_delivery');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
