<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinhluansForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('binhluans', function (Blueprint $table) {
            $table->unsignedInteger('ID_BAIVIET')->after('ID_BINHLUAN');
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
        Schema::table('binhluans', function (Blueprint $table) {
            //
        });
    }
}
