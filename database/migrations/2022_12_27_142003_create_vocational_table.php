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
        Schema::create('vocational', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('info');
            $table->text('dean');
            $table->text('voc_com');
            $table->text('voc_man');
            $table->text('voc_desc1');
            $table->text('voc_desc2');
            $table->text('personal_1');
            $table->text('personal_2');
            $table->text('voc_schema');
            $table->text('mission');
            $table->text('address');
            $table->text('phone');
            $table->text('fax');
            $table->text('email');
            $table->text('map');
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
        Schema::dropIfExists('vocational');
    }
};
