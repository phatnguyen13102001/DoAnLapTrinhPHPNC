<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYeuthichs1ForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('yeuthichs', function (Blueprint $table) {
            $table->unsignedInteger('ID_NGUOITHICH')->after('ID_YEUTHICH');
            $table->foreign('ID_NGUOITHICH')-> references('ID_TAIKHOAN') ->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('yeuthichs', function (Blueprint $table) {
            //
        });
    }
}
