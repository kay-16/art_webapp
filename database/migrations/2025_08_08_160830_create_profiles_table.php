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
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id'); // To connect to the 'User' or reference a user using their ID
            $table->text('bio')->nullable(); // nullable = optional or not required
            $table->string('url')->nullable(); 
            $table->timestamps();
            
            $table->index('user_id'); // adds index or 'shortcut' for better searchability
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
