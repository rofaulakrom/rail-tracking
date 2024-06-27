<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('trains')) {
            Schema::create('trains', function (Blueprint $table) {
                $table->id();
                $table->string('TrainNumber');
                $table->string('TrainName');
                $table->string('Route');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('trains');
    }
}