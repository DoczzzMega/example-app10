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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

//            $table->bigInteger('user_id')->unsigned()->nullable(); // unsigned - больше нуля
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

            // foreignId() - это biginteger + unsigned
//            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('title', 1000);
            $table->text('content');

            $table->boolean('published')->default(true);
            $table->timestamp('published_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
