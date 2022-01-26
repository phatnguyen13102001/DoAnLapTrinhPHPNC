<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiadanhs1ForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diadanhs', function (Blueprint $table) {
            $table->unsignedInteger('ID_DANHMUC')->after('ID_DIADANH');
            $table->foreign('ID_DANHMUC')-> references('ID_DANHMUC') ->on('danhmucs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diadanhs', function (Blueprint $table) {
            //
        });
    }
}
