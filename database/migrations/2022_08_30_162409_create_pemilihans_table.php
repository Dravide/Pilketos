<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pemilihans', function (Blueprint $table) {
            $table->id();
            $table->string('id_qr', 255);
            $table->string('id_calon', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemilihans');
    }
};
