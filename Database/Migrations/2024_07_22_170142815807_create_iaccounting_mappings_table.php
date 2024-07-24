<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIaccountingMappingsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('iaccounting__mappings', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      // Your fields...
      $table->string('type')->nullable();
      $table->string('external_id', 100)->nullable();
      $table->string('external_name')->nullable();
      $table->string('external_value')->nullable();
      $table->longText('options')->nullable();
      $table->integer('apikey_id')->unsigned()->nullable();
      $table->foreign('apikey_id')->references('id')->on('iaccounting__apikeys')->onDelete('cascade');
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
    Schema::table('iaccounting__mappings', function (Blueprint $table) {
      $table->dropForeign(['apikey_id']);
    });

    Schema::dropIfExists('iaccounting__mappings');
  }
}
