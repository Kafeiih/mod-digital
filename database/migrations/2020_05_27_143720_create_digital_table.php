<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDigitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mod_digital', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('url');
            $table->boolean('descarga');
            $table->unsignedBigInteger('formato_id')->nullable();
            $table->timestamps();
            
        });
        Schema::table('mod_digital', function (Blueprint $table) {     
            $table->foreign('formato_id')->references('id')->on('mod_digital_formato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('digital');
    }
}
