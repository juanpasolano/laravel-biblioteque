@section('content')

	<div class="printVotesGraphBox">
	<h3>Ranking for print</h3>
	<p>Every month the book with the highst rank will get founds to be printed twice for us.</p>
		<ul>
			@foreach($books as $book)
				<li>
					<h5>{{$book->name}}</h5>
					<div class="num"> {{$book->print_votes}} votes</div>
					<div class="bar" style="width:{{$book->print_votes}}%"></div>
				</li>
			@endforeach
		</ul>
	</div>
	<div class="booksContainer">
		<?php $c=1; ?>
		@foreach($books as $book)
			<?php if($c == 1) {?><div class="bookRow"><?php } ?>
				<div class="item">

					<img src="{{asset('uploads/covers/'.$book->cover)}}" alt="{{$book->name}}" width="100px">

					<span class="info">
						<span class="title">{{$book->name}}</span>
						<br>
						<span class="desc">{{substr($book->description, 0, 100);}}</span> <br>
						@foreach ($book->tags as $tag)
							<a class="label label-info" href="{{URL::to('books/byTag/'.$tag->id)}}">{{$tag->name}}</a>
						@endforeach
							<hr>
							<a class="btn btn-mini votePrintBtn" data-id="{{$book->id}}" title="Vote to get funds to print two copies of the book"><i class="icon-print"></i> <span class="num">{{$book->print_votes}}</span> votes</a>
							<a class="btn btn-mini" title="The regular always present, pseudo-social-media 'like button'."><i class="icon-heart"></i> {{$book->like_votes}} votes</a>
							<a class="btn btn-mini btn-info" title="Downlaod PDF"><i class="icon-download icon-white"></i> Get PDF</a>
							<a class="btn btn-mini btn-info" title="Downlaod EPUB"><i class="icon-download icon-white"></i> Get EPUB</a>
					</span>

				</div>
			<?php $c++; ?>
			<?php if($c > 4) { $c=1; ?></div><?php } ?>
		@endforeach

	</div>


@endsection