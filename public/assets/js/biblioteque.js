$(document).ready(function(){

var CONFIG= {
	server: 'http://localhost:8000/'
}


/*
|-----------------------------------------------------------------------------
| CREATE BOOK MODAL SUBMIT
|-----------------------------------------------------------------------------
*/
	$(document).on('submit', '#createBookForm', function(e){
		e.preventDefault();
		var formSerial = $(this).serializeObject();
		delete formSerial.tags;
		var tags = $(this).find('.tagsSelect').select2('val');
		console.log(formSerial);
		$.ajax({
			type: 'POST',
			url:CONFIG.server+'books',
			data:{
				book:formSerial,
				tags:tags
			},
			success: function(data){
				$("#createBookModal").modal('hide');
			},
			error:function(error){
				var str='';
				$.each(error.responseJSON, function(index, value) {
				  str += index + ': ' + value+'\n';
				});
				alert(str);
			}
		});
	});


/*
|-----------------------------------------------------------------------------
| VOTE TO PRINT
|-----------------------------------------------------------------------------
*/
	$(document).on('click', '.votePrintBtn', function(e){
		e.preventDefault();
		var self = this;
		var book_id = $(this).data('id');
		console.log(book_id);
		$.ajax({
			type: 'POST',
			url:CONFIG.server+ 'books/print/'+book_id,
			success:function(data){
				console.log(data.print_votes);
				$(self).find('.num').text(data.print_votes);
			}
		})
	});

/*
|-----------------------------------------------------------------------------
| SHOW HIDE PRINTER RANKING
|-----------------------------------------------------------------------------
*/
	$(document).on('click', '.printerRankingBtn', function(e){
		e.preventDefault();
		$('.printVotesGraphBox').toggleClass('show');
	});


/*
|-----------------------------------------------------------------------------
| Gets create book form modal
|-----------------------------------------------------------------------------
*/
	// $.ajax({
	// 	url:CONFIG.server+ 'books/createBookModal',
	// 	type: 'GET',
	// 	success:function(data){
	// 		$('body').append(data);
	// 		$('.tagsSelect').select2({
	// 			tokenSeparators: [",", " "]
	// 		});
	// 	}
	// });

/*
|-----------------------------------------------------------------------------
| Gets print ranking widget
|-----------------------------------------------------------------------------
*/
	$.ajax({
		url:CONFIG.server+ 'books/printRankingWidget',
		type: 'GET',
		success:function(data){
			$('body').append(data);
		}
	});





/*
|-----------------------------------------------------------------------------
| Serialize object fn
|-----------------------------------------------------------------------------
*/
	$.fn.serializeObject = function()
	{
		var o = {};
		var a = this.serializeArray();
		$.each(a, function() {
			if (o[this.name] !== undefined) {
				if (!o[this.name].push) {
					o[this.name] = [o[this.name]];
				}
				o[this.name].push(this.value || '');
			} else {
				o[this.name] = this.value || '';
			}
		});
		return o;
	};




});