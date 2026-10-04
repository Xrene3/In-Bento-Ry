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
        Schema::create("item_movements", function (Blueprint $table) {
            $table->id();
            $table->morphs("movable");
            $table->integer("movement_type")->default(1);
            $table->string("description")->nullable();
            $table->json("payload")->nullable();
            $table->foreignId("performed_by")->constrained("users")->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
