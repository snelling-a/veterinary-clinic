<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("pets", function (Blueprint $table) {
            $table->id();
            $table->integer("owner_id");
            $table->integer("species_id");
            $table->string("name");
            $table->string("breed");
            $table->integer("weight")->nullable();
            $table->integer("age");
            $table->string("photo");
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
        Schema::dropIfExists("pets");
    }
}
