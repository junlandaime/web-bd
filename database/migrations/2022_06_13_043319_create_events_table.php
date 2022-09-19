<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();

            $table->unsignedBigInteger('category_id');
            $table->text('excerpt');
            $table->text('description')->nullable();
            $table->string('image');
            $table->integer('price');
            $table->integer('meet');

            $table->char('status_event', 1)->default(0)->comment('0: coming soon, 1: pendaftaran, 2: event On Going, 3: Selesai');
            $table->timestamp('event_start')->nullable();
            $table->timestamp('event_end')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamp('published_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
