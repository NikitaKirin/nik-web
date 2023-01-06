<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('company_name');
            $table->string('position');
            $table->string('description');
            $table->boolean('hidden');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('work_experiences');
    }
};