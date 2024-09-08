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
        Schema::create('electricity', function (Blueprint $table) {
            $table->id("id");
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references("user_id")->on("customer");
            $table->decimal("input", total: 5, places: 2);
            $table->decimal("output", total: 5, places: 2);
            $table->date("date")->default(date("d-m-y"));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('electricity');
    }
};
