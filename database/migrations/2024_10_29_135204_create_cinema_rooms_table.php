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
		Schema::create('cinema_rooms', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cinema_id')->index();
//            $table->foreign('cinema_id')->references('id')->on('cinemas');
//            $table->string('name');
            $table->string('room_code')->index();
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cinema_rooms');
	}
};
