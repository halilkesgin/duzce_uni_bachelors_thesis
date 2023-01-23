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
        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('info');
            $table->text('head_1');
            $table->text('head_2');
            $table->text('dep_com');
            $table->text('dep_man');
            $table->text('dep_schema');
            $table->text('mission');
            $table->text('address');
            $table->text('phone');
            $table->text('fax');
            $table->text('email');
            $table->integer('faculty_id');
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
        Schema::dropIfExists('department');
    }
};
