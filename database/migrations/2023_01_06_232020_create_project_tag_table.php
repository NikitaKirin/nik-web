<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('project_tag', function (Blueprint $table) {
            $table->foreignId('project_id')
                ->constrained();
            $table->foreignId('tag_id')
                ->constrained();
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_tag');
    }
};