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
            $table->string('district');
            $table->string('vdc_mun');
            $table->integer('ward');
            $table->integer('house')->unique();
            $table->integer('rooms');
            $table->float('rent');
            $table->integer('tid')->unsigned();
            $table->foreign('tid')->references('tid')->on('property_types')->onDelete('cascade');
            $table->integer('aid')->unsigned();
            $table->foreign('aid')->references('aid')->on('availability')->onDelete('cascade');
            $table->text('features')->nullable();
            $table->text('notes')->nullable();
            $table->string('owner');
            $table->string('contact');
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
