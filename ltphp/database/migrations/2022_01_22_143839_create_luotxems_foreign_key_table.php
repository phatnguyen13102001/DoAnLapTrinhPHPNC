<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuotxemsForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('luotxems', function (Blueprint $table) {
            $table->unsignedInteger('ID_BAIVIET')->after('ID_LUOTXEM');
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
        Schema::table('luotxems', function (Blueprint $table) {
            //
        });
    }
}
