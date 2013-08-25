<?php

class TagsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('tags')->truncate();

		$tags = array(
			['name'=>'javascript'], //1
			['name'=>'php'],  			//2
			['name'=>'laravel'],  	//3
			['name'=>'css'],  			//4
			['name'=>'html'],  			//5
			['name'=>'UX'],  				//6
			['name'=>'design'],  		//7
			['name'=>'nodejs'],  		//8
			['name'=>'backbone']  	//9
		);

		// Uncomment the below to run the seeder
		DB::table('tags')->insert($tags);
	}

}
