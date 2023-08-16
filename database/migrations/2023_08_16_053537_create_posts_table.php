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

            $table->string('title');
            $table->text('content')
                ->nullable();
            $table->string('image')
                ->nullable();
            $table->string('slug');

            $table->unsignedBigInteger('category_id')
                ->nullable();
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onDelete('set null');

            $table->unsignedBigInteger('order');
            $table->boolean('is_active');

            $table->timestamps();
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
