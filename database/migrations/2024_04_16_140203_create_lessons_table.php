<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('code')->unique();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->enum('status', ['PUBLICADO', 'RASCUNHO', 'PENDENTE', 'CANCELADO'])->default('PENDENTE');
            $table->string('tags')->nullable();
            $table->date('lesson_date')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')->cascadeOnDelete();
            $table->unsignedBigInteger('grade_id');
            $table->foreign('grade_id')->references('id')->on('grades')->cascadeOnDelete();
            $table->unsignedBigInteger('year_id');
            $table->foreign('year_id')->references('id')->on('years')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
