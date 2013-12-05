<?php

class NewsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		//DB::table('news')->truncate();

		$news = array(
			array('titulo' => 'Composer', 'descricao' => ' Dependency Manager for PHP', 'category_id' => 1 ),
			array('titulo' => 'Backbone', 'descricao' => ' A Javascript MV* Framework', 'category_id' => 3 ),
		);

		// Uncomment the below to run the seeder
		DB::table('news')->insert($news);
	}

}
