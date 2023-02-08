<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table -> id();
            $table -> string("code", 24) -> unique();
            $table -> string("departure_city", 24);
            $table -> string("arrival_city", 24);
            $table -> dateTime("departure_date_time");
            $table -> dateTime("arrival_date_time");
            $table -> integer("delay") -> nullable();
            $table -> integer("passengers_number") -> unsigned() -> nullable();
            $table -> integer("ticket_price") -> unsigned();

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
        Schema::dropIfExists('trains');
    }
};
