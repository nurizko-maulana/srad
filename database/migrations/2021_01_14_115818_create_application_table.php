<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application', function (Blueprint $table) {
            $table->id();
            $table->enum("category", ["UNDERGRADUATE","POSTGRADUATE"]);
            $table->boolean("isReviewed");
            $table->boolean("reviewed_date");
            $table->boolean("isAssignSupervisor");
            $table->boolean("assign_supervisor");
            $table->boolean("isReviewed");
            $table->boolean("isReviewed");
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
        Schema::dropIfExists('application');
    }
}
