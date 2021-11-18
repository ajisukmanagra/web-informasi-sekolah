<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrukturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('struktur_organisasi_tables', function (Blueprint $table) {
            $table->id();
            $table->string('komite_sekolah')->nullable();
            $table->string('kepala_sekolah')->nullable();
            $table->string('wk_sekolah')->nullable();
            $table->string('kaur_tu_sekolah')->nullable();
            $table->string('staff_kurikulum')->nullable();
            $table->string('staff_kesiswaan')->nullable();
            $table->string('staff_humas')->nullable();
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
        Schema::dropIfExists('struktur');
    }
}
