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
        Schema::create('tags_to_objects', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('tag_id')->index();
            $table->uuid('object_id')->index();
            $table->string('object_type');
            $table->string('tag_type');
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
        Schema::dropIfExists('tags_to_objects');
    }
};
