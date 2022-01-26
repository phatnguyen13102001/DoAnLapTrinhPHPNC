<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuotthichsForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('luotthichs', function (Blueprint $table) {
            $table->unsignedInteger('ID_BAIVIET')->after('ID_LUOTTHICH');
            $table->foreign('ID_BAIVIET')-> references('ID_BAIVIET') ->on('baiviets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('luotthichs', function (Blueprint $table) {
            //
        });
    }
}
