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
        Schema::create('messgaes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('channel_id')->constrained('channels');
            $table->foreignId('user_id')->constrained('users');
            $table->text('message');
            $table->enum('type', ['text', 'image', 'file']);
            $table->string('file_path')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_type')->nullable();
            $table->string('file_size')->nullable();
            $table->string('file_extension')->nullable();
            $table->string('file_url')->nullable();
            $table->boolean('is_read')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messgaes');
    }
};
