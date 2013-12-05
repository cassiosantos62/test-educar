<?php

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		//DB::table('categories')->truncate();

		$categories = array(
			array('titulo'=> 'PHP', 'descricao' => 'All the php stuff in just one place.'),
			array('titulo'=> 'MySQL', 'descricao' => 'Great mysql news here.'),	
			array('titulo'=> 'Javascript', 'descricao' => 'Awesome javascript news.'),	
		);

		// Uncomment the below to run the seeder
		DB::table('categories')->insert($categories);
	}

}
