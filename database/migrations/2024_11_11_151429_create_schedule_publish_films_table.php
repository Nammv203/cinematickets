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
        Schema::create('schedule_publish_films', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('film_id');
//            $table->foreign('film_id')->references('id')->on('films');
            $table->unsignedBigInteger('cinema_room_id');
            $table->date('show_date');
            $table->time('show_time');
            $table->integer('ticket_price')->default(0);
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_publish_films');
    }
};
