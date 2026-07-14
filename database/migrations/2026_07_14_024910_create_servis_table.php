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
        Schema::create('servis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_servis_id')->constrained('booking_servis')->cascadeOnDelete();
            $table->foreignId('mekanik_id')->constrained('mekaniks')->cascadeOnDelete();
            $table->date('tanggal_servis');
            $table->decimal('biaya_jasa', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servis');
    }
};