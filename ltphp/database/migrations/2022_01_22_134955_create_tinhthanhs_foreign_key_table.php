<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinhthanhsForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tinhthanhs', function (Blueprint $table) {
            $table->unsignedInteger('ID_MIEN')->after('ID_TINH');
            $table->foreign('ID_MIEN')-> references('ID_MIEN') ->on('vungmiens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tinhthanhs', function (Blueprint $table) {
            //
        });
    }
}
