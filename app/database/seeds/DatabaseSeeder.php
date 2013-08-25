<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		// $this->call('UserTableSeeder');
		// $this->call('BooksTableSeeder');
		$this->call('TagsTableSeeder');
		// $this->call('BookTagsTableSeeder');
	}

}