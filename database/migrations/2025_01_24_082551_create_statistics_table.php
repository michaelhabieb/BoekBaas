<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('statistics', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('active_users_count')->default(0);
            $table->integer('borrowed_books_count')->default(0);
            $table->string('most_read_genres')->nullable();
            $table->date('last_updated')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('statistics');
    }
};
