<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIaccountingProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iaccounting__providers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // Your fields...
            $table->string('person_kind');
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('type_id');
            $table->string('identification');
            $table->string('check_digit')->nullable();
            $table->string('address')->nullable();
            $table->string('indicative_phone')->nullable();
            $table->string('phone_number')->nullable();

            //Iloactions module is necessary
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('ilocations__cities')->onDelete('restrict');

            $table->string('external_id', 100)->nullable()->default(null);
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
        Schema::dropIfExists('iaccounting__providers');
    }
}
