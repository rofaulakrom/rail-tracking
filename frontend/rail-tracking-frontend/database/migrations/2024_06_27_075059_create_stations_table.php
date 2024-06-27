<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationsTable extends Migration
{
    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->id();
            $table->string('StationCode');
            $table->string('StationName');
            $table->decimal('Latitude', 10, 7);
            $table->decimal('Longitude', 10, 7);
        });
    }

    public function down()
    {
        Schema::dropIfExists('stations');
    }
}
