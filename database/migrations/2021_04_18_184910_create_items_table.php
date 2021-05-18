<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('categoria');
            $table->string('nombre');
            $table->string('estilo');
            $table->string('tipico')->nullable(true);
            $table->string('clase');
            $table->string('costura');
            $table->string('talla');
            $table->integer('cantidad');
            $table->integer('precio');
            $table->string('existencia')->nullable(true);
            $table->mediumText('imagen');
            $table->string('color1')->nullable(true);
            $table->string('color2')->nullable(true);
            $table->string('color3')->nullable(true);
            $table->string('color4')->nullable(true);
            $table->string('color5')->nullable(true);
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
        Schema::dropIfExists('items');
    }
}
