<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaivietsForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('baiviets', function (Blueprint $table) {
            $table->unsignedInteger('ID_DIADANH')->after('ID_BAIVIET');
            $table->foreign('ID_DIADANH')-> references('ID_DIADANH') ->on('diadanhs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('baiviets', function (Blueprint $table) {
            //
        });
    }
}
