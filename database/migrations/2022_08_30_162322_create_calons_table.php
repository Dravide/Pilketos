<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('calons', function (Blueprint $table) {
            $table->id();
            $table->string('nama_calon',255);
            $table->string('jargon', 255);
            $table->string('visi_dan_misi', 255);
            $table->string('poster',255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calons');
    }
};
