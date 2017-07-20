<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grades_id')->unsigned(); //means cant be negative
            $table->char('name',50)->nullable();;
            $table->char('email', 75)->nullable();;
            $table->char('phone',12)->nullable();;
            $table->date('year')->nullable();;
            $table->timestamps();
        });
        //Create the Foreign Key (link to PL table - Grades ID column)
        Schema::table('coaches', function(Blueprint $table) {
            $table->foreign('grades_id')->references('id')->on('grades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drops the foreign key for pl_id
        Schema::table('coaches', function(Blueprint $table) {
            $table->dropForeign('coaches_grades_id_foreign');
        });
        Schema::dropIfExists('coaches');
    }
}
