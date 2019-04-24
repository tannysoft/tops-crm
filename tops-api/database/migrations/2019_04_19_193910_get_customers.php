<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GetCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('CAMPAIGN_ID');
            $table->string('SBL_MEMBER_ID');
            $table->string('FIRST_TH_NAME');
            $table->string('LAST_TH_NAME');
            $table->string('FIRST_EN_NAME');
            $table->string('LAST_EN_NAME');
            $table->string('LANGUAGE');
            $table->integer('CC_SCB');
            $table->integer('CC_Central');
            $table->integer('CC_BAY');
            $table->integer('CC_KTC');
            $table->integer('Condition_ID');
            $table->string('Condition_ID2');
            $table->string('GROUP');
            $table->string('MIN_PURCHASE');
            $table->string('url_id');
            // $table->timestamps();
        });
/*
        Schema::table(
            'posts', function ($table) {
                $table
                    ->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            }
        );
*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
