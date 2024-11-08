<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::table('iaccounting__purchases', function (Blueprint $table) {
      $table->dropColumn('payment_method');
      $table->renameColumn('elaboration_date', 'invoice_date');
      $table->integer('payment_method_id');
      $table->integer('status_id');
      $table->integer('document_type')->change();

      $table->integer('accounting_account_id')->nullable();

      $table->integer('provider_id')->unsigned();
      $table->foreign('provider_id')->references('id')->on('iaccounting__providers')->onDelete('cascade');

      if(Schema::hasColumn('iaccounting__purchases', 'provider_name')) {
        // Remove unused columns from purchase
        $table->dropColumn('provider_name');
        $table->dropColumn('provider_id_type');
        $table->dropColumn('provider_id_number');
      }
    });

    Schema::table('iaccounting__providers', function (Blueprint $table) {
      $table->string('email')->nullable();
      $table->integer('person_kind')->change();
      $table->integer('type_id')->change();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('iaccounting__purchases', function (Blueprint $table) {
      $table->renameColumn('invoice_date', 'elaboration_date');
      $table->dropForeign(['provider_id']);
    });
  }
};
