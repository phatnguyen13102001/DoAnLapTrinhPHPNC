<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuotxems1ForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('luotxems', function (Blueprint $table) {
            $table->unsignedInteger('ID_NGUOIXEM')->after('ID_LUOTXEM');
            $table->foreign('ID_NGUOIXEM')-> references('ID_TAIKHOAN') ->on('users')->onDelete('cascade');
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
