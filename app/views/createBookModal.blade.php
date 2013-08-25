
	<div id="createBookModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="createBookModalLabel" aria-hidden="true">

	  <form method="POST" action="http://localhost:8000/books" accept-charset="UTF-8" class="form-horizontal" id="createBookForm">

	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3 id="createBookModalLabel">Modal header</h3>
	  </div>
	  <div class="modal-body">

			<fieldset>

				<div class="control-group">
					{{ Form::label('cover', 'Cover image:', array('class'=> 'control-label')) }}
					<div class="controls">
					{{ Form::text('cover','', array('class'=> 'input-xlarge'))  }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('name', 'Name:', array('class'=> 'control-label')) }}
					<div class="controls">
						{{ Form::text('name','', array('class'=> 'input-xlarge'))  }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('author', 'Author:', array('class'=> 'control-label')) }}
					<div class="controls">
					{{ Form::text('author','', array('class'=> 'input-xlarge'))  }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('description', 'Description:', array('class'=> 'control-label')) }}
					<div class="controls">
					{{ Form::text('description','', array('class'=> 'input-xlarge')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('lang', 'Lang:', array('class'=> 'control-label')) }}
					<div class="controls">
					{{ Form::text('lang','', array('class'=> 'input-xlarge'))  }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('rating', 'Rating:', array('class'=> 'control-label')) }}
					<div class="controls">
					{{ Form::text('rating','', array('class'=> 'input-xlarge'))  }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('pdf_path', 'Pdf path:', array('class'=> 'control-label')) }}
					<div class="controls">
					{{ Form::text('pdf_path','', array('class'=> 'input-xlarge'))  }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('epub_path', 'Epub path:', array('class'=> 'control-label')) }}
					<div class="controls">
					{{ Form::text('epub_path','', array('class'=> 'input-xlarge'))  }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('tags', 'Select the tags:', array('class'=> 'control-label')) }}

					<div class="controls">
					<select name="tags" id="tags" class="tagsSelect" multiple='multiple'>
						@foreach ($tags as $tag)
							<option value="{{$tag->id}}">{{$tag->name}}</option>
						@endforeach
					</select>
					</div>
				</div>
			</fieldset>
	  </div>
	  <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    <input type="submit" class="btn btn-primary" value="Upload Book">
	  </div>
		{{ Form::close() }}
	</div>

