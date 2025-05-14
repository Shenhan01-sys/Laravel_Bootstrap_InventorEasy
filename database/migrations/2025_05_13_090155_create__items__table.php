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
            $table->bigIncrements('id_Item');
            $table->string('name_Item', 50);
            $table->unsignedBigInteger('id_Category');
            $table->foreign('id_Category')->references('id_Category')->on('categories')->onDelete('cascade');
            $table->string('description', 255)->nullable();
            $table->integer('quantity');
            $table->boolean('available')->default(true);
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
