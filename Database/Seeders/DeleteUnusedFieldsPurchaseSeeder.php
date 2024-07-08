<?php

namespace Modules\Iaccounting\Database\Seeders;

use Illuminate\Database\Seeder;

class DeleteUnusedFieldsPurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      if(Schema::hasColumn('iaccounting__purchases', 'provider_name')) {
        // Remove unused columns from purchase
        Schema::table('iaccounting__purchases', function ($table) {
          $table->dropColumn('provider_name');
          $table->dropColumn('provider_id_type');
          $table->dropColumn('provider_id_number');
        });
      }
    }
}
