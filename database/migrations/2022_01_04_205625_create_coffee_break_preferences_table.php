<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeeBreakPreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffee_break_preferences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('preferences');

            $table->unsignedBigInteger('staff_member_id');
            $table->index('staff_member_id');
            $table->foreign('staff_member_id')
                ->references('id')
                ->on('staff_members')
                ->onDelete('cascade');

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
        Schema::dropIfExists('coffee_break_preferences');
    }
}
