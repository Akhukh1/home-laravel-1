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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'title')->default(value: 'Группа FS-01');
            $table->string(column: 'start_from')->default(value: '2023-01-10');
            $table->boolean(column: 'is_active')->default(true);
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
        Schema::dropIfExists('groups');
    }
};
