<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /* Run the migrations. */
    public function up(): void
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->id('tutor_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');

            $table->integer('subject_id');
            $table->integer('tutor_hour');
            $table->integer('weekly_day');

            $table->integer('fee');
            $table->string('fb');
            $table->string('insta');
            $table->string('linkdin');

            $table->integer('country_id');
            $table->integer('state_id');
            $table->integer('city_id');
            $table->integer('village_id');

            $table->string('address');
            $table->string('bio');
            $table->string('image');

            $table->timestamps();
        });
    }

    /* Reverse the migrations. */
    public function down(): void
    {
        Schema::dropIfExists('tutors');
    }
};
