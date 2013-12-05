<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeingToNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::table('news', function(Blueprint $table) {			
			$table->foreign('category_id')
				  ->references('id')->on('categories');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('news', function(Blueprint $table) {			
			$table->dropForeign('posts_user_id_foreign');
		});	

	}

}