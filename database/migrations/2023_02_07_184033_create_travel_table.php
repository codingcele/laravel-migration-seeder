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
        Schema::create('travel', function (Blueprint $table) {
            $table -> id();
            $table -> string("code", 24) -> unique();
            $table -> string("host_city", 24);
            $table -> integer("duration_days");
            $table -> dateTime("departure_date_time");
            $table -> dateTime("arrival_date_time");
            $table -> integer("travellers_number") -> unsigned() -> nullable();
            $table -> integer("travel_total_price") -> unsigned();
            $table -> string("transport_mean", 24);
            $table -> string("host_structure", 24);
            
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
        Schema::dropIfExists('travel');
    }
};
