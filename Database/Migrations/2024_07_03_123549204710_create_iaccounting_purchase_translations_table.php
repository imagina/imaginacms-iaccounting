<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIaccountingPurchaseTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iaccounting__purchase_translations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('purchase_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['purchase_id', 'locale']);
            $table->foreign('purchase_id')->references('id')->on('iaccounting__purchases')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('iaccounting__purchase_translations', function (Blueprint $table) {
            $table->dropForeign(['purchase_id']);
        });
        Schema::dropIfExists('iaccounting__purchase_translations');
    }
}
