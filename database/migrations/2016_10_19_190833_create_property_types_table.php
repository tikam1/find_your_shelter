<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_types', function (Blueprint $table) {
            $table->increments('tid');
            $table->string('type')->unique();
            $table->timestamps();
        });

        DB::table('property_types')->insert(
            array(
                'type' => 'Room'
            )
        );

        DB::table('property_types')->insert(
            array(
                'type' => 'Flat'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_types');
    }
}
