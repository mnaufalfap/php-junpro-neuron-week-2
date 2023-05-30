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
        Schema::create('drugs', function (Blueprint $table) {
            //$table->id();
            $table->char('drugs_id', 10);
            $table->string('drugs_name', 100);
            $table->string('drugs_class', 50);
            $table->string('drugs_type', 50);
            $table->string('drugs_unit', 50);
            $table->integer('drugs_prices');
            $table->primary('drugs_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drugs');
    }
};
