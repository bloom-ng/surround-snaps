<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('contact_number');
            $table->string('email');
            $table->string('event_type');
            $table->date('event_date');
            $table->time('event_start_time');
            $table->text('venue_address');
            $table->string('venue_type');
            $table->string('contact_person');
            $table->string('contact_person_phone');
            $table->text('event_theme')->nullable();
            $table->text('special_instructions')->nullable();
            $table->string('package');
            $table->json('additional_hours')->nullable();
            $table->decimal('total_cost', 8, 2);
            $table->enum('status', ['pending', 'paid', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}