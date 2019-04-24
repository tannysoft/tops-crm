<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create39CouponUsedsTable extends Migration
{

    public function up()
    {
        Schema::create('39_coupon_useds', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->string('sbl_member_id');
            $table->string('condition_id');
            $table->string('barcode');
            $table->integer('tops_api_id')->unsigned();
            $table->foreign('tops_api_id')
                ->references('id')
                ->on('tops_apis');

        });
    }

    public function down()
    {
        Schema::drop('39_coupon_useds');
    }
}
