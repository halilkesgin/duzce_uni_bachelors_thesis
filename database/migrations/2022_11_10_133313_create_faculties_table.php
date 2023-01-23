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
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->text('fac_title');
            $table->text('fac_information');
            $table->text('fac_dean_1');
            $table->text('fac_dean_2');
            $table->text('fac_head_1');
            $table->text('fac_head_2');
            $table->text('fac_form');
            $table->text('fac_erasmus');
            $table->text('fac_intern');
            $table->text('fac_farabi');
            $table->text('fac_schema');
            $table->text('fac_mission');
            $table->text('fac_report');
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
        Schema::dropIfExists('faculties');
    }
};
