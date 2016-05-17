<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('date');
            $table->integer('intro');
            $table->integer('consultation');
            $table->integer('styling_area');
            $table->integer('stylist_appearance');
            $table->integer('prod_advice');
            $table->integer('styling_advice');
            $table->integer('mkt1');
            $table->integer('mkt2');
            $table->integer('mkt3');
            $table->integer('value_for_money');
            $table->integer('whole_experience');
            $table->integer('end_result');
            $table->string('extra');
            $table->string('extra_edit');
            $table->integer('client_id');
            $table->boolean('allow');
            $table->boolean('publish');
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
        Schema::drop('feedback');
    }
}
