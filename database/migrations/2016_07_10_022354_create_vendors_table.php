<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string("full_name");
            $table->string("biz_name");
            $table->string("email");
            $table->string("website_1");
            $table->string("website_2");
            $table->string("facebook");
            $table->string("twitter");
            $table->string("instagram");
            $table->text("prod_desc");
            $table->text("booth_pref");
            $table->text("paypal_email");

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vendors');
    }
}
