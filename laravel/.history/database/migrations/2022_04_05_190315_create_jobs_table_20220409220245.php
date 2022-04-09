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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string(column:"jobtitle");
            $table->string(column:"description");
            $table->string(column:"country");
            $table->string(column:"shift");
            $table->string(column:"time_start");
            $table->string(column:"time_close");
            $table->string(column:"type");
            $table->boolean(column:"is_active");
            $table->string(column:"qualifications");
            $table->string(column:"respossbilities");
            $table->string(column:"steps_to_applye");
            
            $table->unsignedBigInteger('company_id');
         
            $table->foreign('company_id')
                 ->references('id')->on('companies')->onDelete('cascade');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
