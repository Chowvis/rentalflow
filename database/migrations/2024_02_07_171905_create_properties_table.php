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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('title');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->integer('pincode');
            $table->integer('rent');
            $table->string('description')->nullable();
            $table->timestamps();
            $table -> string('status')->nullable();
            $table -> foreignId('tenant_id')->nullable()->constrained();
            $table -> string('tenant_name')->nullable();
            $table -> decimal('lat',18,15)->nullable();
            $table -> decimal('lng',18,15)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
