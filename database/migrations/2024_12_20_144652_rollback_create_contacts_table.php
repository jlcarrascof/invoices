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
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('type', 20);
            $table->string('name', 100);
            $table->string('document_type', 20);
            $table->string('document_number', 20);
            $table->string('address', 256)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->timestamps();
        });
    }
};
