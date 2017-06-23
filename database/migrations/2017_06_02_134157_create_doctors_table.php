<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->unsignedInteger('department_id')->default(0);
            $table->string('specialization');
            $table->unsignedSmallInteger('experience')->nullable();
            $table->string('photo')->nullable();
            $table->text('info');
            $table->string('url');
            $table->string('keywords');
            $table->string('description');
            $table->boolean('show_in_catalog')->default(0);
            $table->boolean('show_in_main_page')->default(0);
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
        Schema::dropIfExists('doctors');
    }
}
