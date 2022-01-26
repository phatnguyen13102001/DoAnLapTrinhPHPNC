<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiadanhsForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diadanhs', function (Blueprint $table) {
            $table->unsignedInteger('ID_TINH')->after('ID_DIADANH');
            $table->foreign('ID_TINH')-> references('ID_TINH') ->on('tinhthanhs')->onDelete('cascade');
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
