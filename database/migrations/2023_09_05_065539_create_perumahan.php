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
        Schema::dropIfExists('perumahan'); // Drop the table if it exists

        Schema::create('perumahan', function (Blueprint $table) {
            $table->increments("id_perumahan");
            $table->integer("luas_perumahan");
            $table->integer("harga_perumahan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perumahan');
    }
};
