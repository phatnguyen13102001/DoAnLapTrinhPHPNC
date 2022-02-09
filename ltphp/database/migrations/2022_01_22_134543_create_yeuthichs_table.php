<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYeuthichsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yeuthiches', function (Blueprint $table) {
            $table->increments('ID_YEUTHICH');
            $table->integer('ID_DIADANH');
            $table->integer('ID_NGUOITHICH');
            $table->boolean('TRANGTHAI');
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
        Schema::dropIfExists('yeuthiches');
    }
}
