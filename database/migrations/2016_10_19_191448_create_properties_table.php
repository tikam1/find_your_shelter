<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('pid');
            $table->string('house_img')->default('default_01.jpg');
            $table->string('district');
            $table->string('city');
            $table->string('city_area');
            $table->string('house_no');
            $table->integer('no_of_rooms');
            $table->float('rent');
            $table->integer('tid')->unsigned();
            $table->foreign('tid')->references('tid')->on('property_types')->onDelete('cascade');
            $table->integer('aid')->unsigned();
            $table->foreign('aid')->references('aid')->on('availability')->onDelete('cascade');
            $table->string('availability')->default('Yes');
            $table->text('features');
            $table->text('other_notes');
            $table->string('owner');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
