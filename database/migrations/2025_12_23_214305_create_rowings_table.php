<?php

use App\Models\User;
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
        Schema::create('rowings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->date('date');
            $table->integer('time');
            $table->decimal('distance');
            $table->integer('stroke_rate');
            $table->integer('pace');
            $table->integer('watts');
            $table->integer('watch_rest_energy')->nullable();
            $table->integer('watch_heart_rate')->nullable();
            $table->integer('watch_active_energy')->nullable();
            $table->integer('watch_met_values')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rowings');
    }
};
