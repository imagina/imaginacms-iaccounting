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

      $table->integer('payment_method_id')->unsigned();
      $table->foreign('payment_method_id')->references('id')->on('iaccounting__mappings')->onDelete('cascade');

      $table->integer('accounting_account_id')->unsigned();
      $table->foreign('accounting_account_id')->references('id')->on('iaccounting__mappings')->onDelete('cascade');

      $table->integer('provider_id')->unsigned();
      $table->foreign('provider_id')->references('id')->on('iaccounting__providers')->onDelete('cascade');

      if(Schema::hasColumn('iaccounting__purchases', 'provider_name')) {
        // Remove unused columns from purchase
        $table->dropColumn('provider_name');
        $table->dropColumn('provider_id_type');
        $table->dropColumn('provider_id_number');
      }
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::table('iaccounting__purchases', function (Blueprint $table) {
      $table->renameColumn('invoice_date', 'elaboration_date');
      $table->dropForeign(['accounting_account_id']);
      $table->dropForeign(['payment_method_id']);
      $table->dropForeign(['provider_id']);
    });
  }
};
