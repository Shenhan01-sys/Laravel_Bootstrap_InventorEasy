<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->bigIncrements('id_Loan');
            $table->unsignedBigInteger('id_Item');
            $table->integer('nim');
            $table->foreign('id_Item')->references('id_Item')->on('items')->onDelete('cascade');
            $table->foreign('nim')->references('nim')->on('users1')->onDelete('cascade');
            $table->date('loan_date');
            $table->date('return_date')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->string('notes')->nullable();
            $table->integer('quantity')->default(1);
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
        Schema::dropIfExists('loans');
    }
}
