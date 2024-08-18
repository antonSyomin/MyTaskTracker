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
        Schema::create('cards', function (Blueprint $table) {
            $table->id(); // id карточки
            $table->string('title')->default('Новая карточка');
            $table->string('content')->nullable();
            $table->foreignId('owner_id')->references('id')->on('users'); // ссылка на id владельца
            $table->json('performers')->nullable(); // массив с id исполнителей
            $table->string('status')->default('started');
            $table->date('deadline')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->deafault(now())->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
