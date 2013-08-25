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