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
        Schema::create('channels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_private')->default(true);
            $table->boolean('is_active')->default(true);
            $table->decimal('amount', 10, 2)->default(0);
            $table->enum('status', ['trading', 'pending', 'completed', 'cancelled', 'report'])->default('pending');
            $table->enum('type', ['buy', 'sell'])->default('buy');
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channels');
    }
};
