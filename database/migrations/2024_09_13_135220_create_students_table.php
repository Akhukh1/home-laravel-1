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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer(column: 'group_id')->default(1);
            $table->string(column: 'surname')->default(value: 'Петров');
            $table->string(column: 'name')->default(value: 'Иван');
            $table->string(column: 'created_at')->default(value: '2023-01-01 10:00:00');
            $table->string(column: 'updated_at')->default(value: '2023-01-01 10:00:00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
