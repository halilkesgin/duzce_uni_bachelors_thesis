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
        Schema::create('voc_department', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('info');
            $table->text('head_1');
            $table->text('head_2');
            $table->text('voc_com');
            $table->text('voc_man');
            $table->text('voc_schema');
            $table->text('mission');
            $table->text('address');
            $table->text('phone');
            $table->text('fax');
            $table->text('email');
            $table->integer('vocational_id');
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
        Schema::dropIfExists('voc_department');
    }
};
