<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('books', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('author');
            $table->uuid('genre_id')->nullable();
            $table->string('isbn')->unique()->nullable();
            $table->integer('publication_year');
            $table->timestamps();

            // Foreign key verwijzing naar genres
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('set null');
        });
    }

    public function down(): void {
        Schema::dropIfExists('books');
    }
};
