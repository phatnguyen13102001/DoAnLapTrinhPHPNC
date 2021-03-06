<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuotthichsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luotthiches', function (Blueprint $table) {
            $table->increments('ID_LUOTTHICH');
            $table->integer('ID_BAIVIET');
            $table->integer('ID_NGUOITHICH');
            $table->boolean('TRANGTHAI');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luotthiches');
    }
}
