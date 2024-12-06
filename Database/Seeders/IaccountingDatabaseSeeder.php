<?php

namespace Modules\Iaccounting\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Isite\Jobs\ProcessSeeds;
class IaccountingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  public function run()
  {
    Model::unguard();
    ProcessSeeds::dispatch([
      "baseClass" => "\Modules\Iaccounting\Database\Seeders",
      "seeds" => []
    ]);
  }
}
