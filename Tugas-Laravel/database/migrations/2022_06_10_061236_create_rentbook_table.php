<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentbook', function (Blueprint $table) {
            $table->id();
            $table->string('bookname');
            $table->string('name');
            $table->integer('no_hp');
            $table->string('email');
            $table->date('return_date')->format('dd,mm,YY');
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
        Schema::dropIfExists('rentbook');
    }
};
