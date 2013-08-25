<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie7"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=1024, maximum-scale=2" />
	<meta name="description" content="Description" />
	<meta name="keywords" content="Keywords" />
	<meta name="author" content="imaginamos.com">
<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 month">
	<title></title>

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- <link href='http://fonts.googleapis.com/css?family=Port+Lligat+Slab' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'> -->
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>

	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">

	<link href="{{ URL::asset('assets/css/biblioteque.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('assets/css/select2.css') }}" rel="stylesheet">



</head>
<body>

	@yield('content')

	<footer>
		<!-- <h3 class="pull-right">Book repository</h3> -->
		<a href="#createBookModal" role="button" class="btn btn-info" data-toggle="modal">Upload new book</a>
		<a href="#createBookModal" role="button" class="btn btn-info" data-toggle="modal">Wish list</a>
		<a href="#" class="btn btn-info printerRankingBtn">See printer ranking</a>
	</footer>





	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="{{ URL::asset('assets/js/biblioteque.js') }}"></script>
	<script src="{{ URL::asset('assets/js/select2.min.js') }}"></script>
</body>
</html>

