<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->string('name');
            $table->string('email');
            $table->timestamp('tanggal_lahir');
            $table->boolean('gender');
            $table->string('wa_number');
            $table->text('domisili');
            $table->text('tinggal');
            $table->boolean('marriage_status');
            $table->string('education');
            $table->string('suku');
            $table->string('kondisi');
            $table->string('foto');
            $table->string('univ')->nullable();;
            $table->string('jurusan')->nullable();;
            $table->string('pekerjaan')->nullable();;
            $table->boolean('status')->default(false);
            $table->text('dll');
            $table->timestamp('input_data')->nullable();
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
        Schema::dropIfExists('profile_members');
    }
}
