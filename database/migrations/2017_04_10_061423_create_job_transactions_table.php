<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_transactions', function (Blueprint $table) {
            $table->bigIncrements('idjobstrans');
            $table->bigInteger('user_id');
            $table->bigInteger('jobs_id');
            $table->string('status');
            $table->bigInteger('bidPrice')->nullable();
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
        Schema::dropIfExists('job_transactions');
    }
}
