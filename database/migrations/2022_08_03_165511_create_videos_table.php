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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')
                ->nullable()
                ->constrained('subjects')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->integer('week');
            $table->string('resource_url');
            $table->text('description');
            $table->integer('part');
            $table->integer('session_parts')->nullable();
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
        Schema::dropIfExists('videos');
    }
};
