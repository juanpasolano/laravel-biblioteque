<?php

class BooksTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('books')->truncate();

		$books = array(
			[
			'name' => 'About Face 3: The Essentials of Interaction Design',
			'author' => 'Alan Cooper',
			'description' => 'This completely updated volume presents the effective and practical tools you need to design great desktop applications, Web 2.0 sites, and mobile devices. You’ll learn the principles of good product behavior and gain an understanding of Cooper’s Goal-Directed Design method, which involves everything from conducting user research to defining your product using personas and scenarios. Ultimately, you’ll acquire the knowledge to design the best possible digital products and services.',
			'lang' => 'EN',
			'pdf_path' => 'randompath/nogoinganywhere/yeah.pdf',
			'cover' => '1.jpg'
			],
			[
			'name' => 'Beginning Google Maps API 3',
			'author' => 'Gabriel Svennerberg',
			'description' => 'This book is about the next generation of the Google Maps API. It will provide the reader with the skills and knowledge necessary to incorporate Google Maps version 3 on web pages in both desktop and mobile browsers.It also describes how to deal with common problems that most map developers encounter at some point, like performance and usability issues with having too many markers and possible solutions to that.',
			'lang' => 'EN',
			// 'epub_path' => 'randompath',
			'pdf_path' => 'file',
			'cover' => '2.jpg'
			],
			[
			'name' => 'CSS3 for web designers',
			'author' => 'Dan Cederholm',
			'description' => 'From advanced selectors to generated content to the triumphant return of web fonts, and from gradien',
			'lang' => 'EN',
			'pdf_path' => 'file',
			'cover' => '3.jpg'
			],
			[
			'name' => 'Laravel: Code Bright',
			'author' => 'Taylor Otwell',
			'description' => 'Web application development for the Laravel framework version 4 for beginners. ',
			'lang' => 'EN',
			'pdf_path' => 'file',
			'cover' => '4.jpg'
			],
			[
			'name' => 'Bilding Node Applications with Mongo DB and Backbone',
			'author' => 'Mike Wilson',
			'description' => 'Build an application from backend to browser with Node.js, and kick open the doors to real-time event programming. With this hands-on book, you’ll learn how to create a social network application similar to LinkedIn and Facebook, but with a real-time twist. And you’ll build it with just one programming language: JavaScript.',
			'lang' => 'EN',
			'pdf_path' => 'file',
			'cover' => '5.jpg'
			],
			[
			'name' => 'Node js: for PHP Developers',
			'author' => 'Daniel Howard',
			'description' => 'If you’re an experienced PHP developer, you already have a head start on learning how to write Node.js code. In this book, author Daniel Howard demonstrates the remarkable similarities between the two languages, and shows you how to port your entire PHP web application to Node.js. By comparing specific PHP features with their Node counterparts, you’ll also discover how to refactor and improve existing PHP 4 or PHP 5 source code.',
			'lang' => 'EN',
			'pdf_path' => 'file',
			'cover' => '6.jpg'
			]
		);

		// Uncomment the below to run the seeder
		DB::table('books')->insert($books);
	}

}
