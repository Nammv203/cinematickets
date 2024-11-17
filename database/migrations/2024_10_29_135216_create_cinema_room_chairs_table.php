<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cinema_room_chairs', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cinema_room_id')->index();
//            $table->foreign('cinema_room_id')->references('id')->on('cinema_rooms');
            $table->string('chair_code')->index();
            $table->tinyInteger('chair_type')->index()->default(0)->comment('0 is low, 1 is normal, 2 is VIP');
            $table->integer('amount')->default(0);
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
		Schema::drop('cinema_room_chairs');
	}
};
