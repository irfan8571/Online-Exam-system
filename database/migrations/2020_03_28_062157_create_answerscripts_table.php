<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerscriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answerscripts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('student_name');
            $table->integer('student_id');
            $table->integer('exam_id');
            $table->integer('question_id');
            $table->string('submitted_answer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answerscripts');
    }
}
