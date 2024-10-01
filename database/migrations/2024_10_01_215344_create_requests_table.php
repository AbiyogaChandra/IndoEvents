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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['create', 'update']);
            $table->foreignId('event_id')->nullable()->constrained('events')->onDelete('cascade');
            $table->string('title', 50);
            $table->text('description');
            $table->dateTime('event_time');
            $table->string('location', 100);
            $table->integer('ticket_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
