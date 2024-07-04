<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIaccountingPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iaccounting__purchases', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your fields...
            $table->string('document_type');
            $table->date('elaboration_date');
            $table->float('total', 50, 2);
            $table->float('subtotal', 50, 2);
            $table->string('currency_code');
            $table->string('payment_method');
            $table->string('provider_name');
            $table->string('provider_id_type');
            $table->string('provider_id_number');
            $table->longText('invoice_items');
            $table->longText('options')->nullable();

            // Audit fields
            $table->timestamps();
            $table->auditStamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iaccounting__purchases');
    }
}
