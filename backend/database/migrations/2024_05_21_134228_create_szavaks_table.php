<?php

use App\Models\szavak;
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
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string('angol');
            $table->string('magyar');
            $table->foreignId('temaId')->references('id')->on('temas');
            $table->timestamps();
        });

        szavak::create(['angol'=>'SmartWatch','magyar'=>'Okos óra','temaId'=>1]);
        szavak::create(['angol'=>'Soup','magyar'=>'Leves','temaId'=>2]);
        szavak::create(['angol'=>'Rice','magyar'=>'Rízs','temaId'=>2]);
        szavak::create(['angol'=>'T-shirt','magyar'=>'Póló','temaId'=>3]);
        szavak::create(['angol'=>'Tie','magyar'=>'Nakkendő','temaId'=>3]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};
