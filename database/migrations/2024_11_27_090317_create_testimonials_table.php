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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->text('name_uz')->nullable();
            $table->text('name_ru')->nullable();
            $table->text('name_en')->nullable();
            $table->text('position_uz')->nullable();
            $table->text('position_ru')->nullable();
            $table->text('position_en')->nullable();
            $table->text('company_name')->nullable();
            $table->text('testimonial_uz')->nullable();
            $table->text('testimonial_ru')->nullable();
            $table->text('testimonial_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
