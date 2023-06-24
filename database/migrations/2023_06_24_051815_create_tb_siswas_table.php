<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_siswas', function (Blueprint $table) {
            $table->string('nisn', 11)->primary();
            $table->string('nis', 15)->uniqid();
            $table->string('nama', 100);
            $table->string('email')->nullable();
            $table->string('password', 225);
            $table->string('kelas', 15);
            $table->string('jeniskelamin', 20)->nullable();
            $table->string('agama', 10)->nullable();
            $table->string('tempatlahir', 100);
            $table->date('tanggallahir'); 
            $table->date('tahunmasuk');
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
        Schema::dropIfExists('tb_siswas');
    }
};
