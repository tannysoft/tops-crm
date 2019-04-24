<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{

    public function up()
    {
        Schema::create('Customers', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('CAMPAIGN_ID')->unsigned();
            $table->string('SBL_MEMBER_ID');
            $table->string('FIRST_TH_NAME');
            $table->string('LAST_TH_NAME');
            $table->string('FIRST_EN_NAME');
            $table->string('LAST_EN_NAME');
            $table->string('LANGUAGE');
            $table->integer('CC_SCB')->unsigned();
            $table->integer('CC_Central')->unsigned();
            $table->integer('CC_BAY')->unsigned();
            $table->integer('CC_KTC')->unsigned();
            $table->integer('Condition_ID')->unsigned();
            $table->string('Condition_ID2');
            $table->string('GROUP');
            $table->string('MIN_PURCHASE');
            $table->string('url_id');
            $table->integer('tops_api_id')->unsigned();
            $table->foreign('tops_api_id')
                ->references('id')
                ->on('tops_apis');

        });
    }

    public function down()
    {
        Schema::drop('Customers');
    }
}
