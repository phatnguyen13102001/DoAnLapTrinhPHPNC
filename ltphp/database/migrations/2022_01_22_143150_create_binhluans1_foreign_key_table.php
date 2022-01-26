<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinhluans1ForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('binhluans', function (Blueprint $table) {
            $table->unsignedInteger('ID_NGUOIBL')->after('ID_BINHLUAN');
            $table->foreign('ID_NGUOIBL')-> references('ID_TAIKHOAN') ->on('users')->onDelete('cascade');
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
