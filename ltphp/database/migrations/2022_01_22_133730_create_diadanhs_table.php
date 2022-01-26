<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiadanhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diadanhs', function (Blueprint $table) {
            $table->increments('ID_DIADANH');
            $table->string('TENDIADANH');
            $table->string('HINHANH');
            $table->string('DIACHI');
            $table->string('KINHDO');
            $table->string('VIDO');
            $table->string('MOTA');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diadanhs');
    }
}
