<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;
use App\Models\Album;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('image_manipulations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('path', 2000);
            $table->text('type', 25);
            $table->string('data');
            $table->string('ouput_path', 2000)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->foreignIdFor(User::class, 'user_id')->nullable();
            $table->foreignIdFor(Album::class, 'album_id')->nullable();
            
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_manipulations');
    }
};
