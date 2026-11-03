<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('complaint_forwards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('complaint_id')->constrained()->unique();
            $table->foreignId('forwarded_to')->constrained('users');
            $table->dateTime('forwarded_at');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaint_forwards');
    }
};
