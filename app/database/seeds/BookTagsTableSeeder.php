<?php

class BookTagsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('book_tag')->truncate();

		$book_tags = array(
			['book_id'=>'1','tag_id'=>'6'],
			['book_id'=>'1','tag_id'=>'7'],
			['book_id'=>'2','tag_id'=>'1'],
			['book_id'=>'3','tag_id'=>'4'],
			['book_id'=>'4','tag_id'=>'2'],
			['book_id'=>'4','tag_id'=>'3'],
			['book_id'=>'5','tag_id'=>'1'],
			['book_id'=>'5','tag_id'=>'8'],
			['book_id'=>'5','tag_id'=>'9'],
			['book_id'=>'6','tag_id'=>'8'],
			['book_id'=>'6','tag_id'=>'9']
		);

		// Uncomment the below to run the seeder
		DB::table('book_tag')->insert($book_tags);
	}

}
