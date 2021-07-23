<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nades', function (Blueprint $table) {
            $table->id();
            $table->string('nade_name',50)->charset('utf8mb4');
            $table->string('yt_url')->charset('utf8mb4')->default(null);
            //$table->foreignId('user_id');
            $table->Integer('nade_id');
            $table->Integer('map_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nades');
    }
}
