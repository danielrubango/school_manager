<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->increments('id');
            // $table->unsignedInteger('year_id');
            $table->unsignedInteger('level_id');
            $table->unsignedInteger('student_id');
            $table->timestamps();

            // $table->foreign('year_id')
            //     ->references('id')->on('years')
            //     ->onDelete('cascade');

            $table->foreign('level_id')
                ->references('id')->on('levels')
                ->onDelete('cascade');

            $table->foreign('student_id')
                ->references('id')->on('students')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
