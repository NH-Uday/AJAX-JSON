function f1(){
	alert('it works...');
}

/*$(function(){
	$('input').click(function(){
		alert('jquery works...');
	});
});*/


$(document).ready(function(){

/*	$('input[type=button]').click(function(){
		alert('jquery works...');
	});*/

	/*$('.btn').click(function(){
		//$('div>h1').html('Test');
		$('body>h1').html($('input[type=text]').val());
	});*/

/*	$('input[type=text]').keyup(function(){
		$('body>h1').html($('input[type=text]').val());
	});
*/

	var json = {
		name: 'alamin',
		dept: 'cs'
	};

	var obj = JSON.stringfy(json);

	$('input[type=button]').on('click', function(){
		
		$.ajax({
			url:'abc.php',
			method: 'GET',
			data: {
				mydata: obj
			},
			success: function(response){
				//var obj = JSON.parse(response);
				alert(response);
			},
			error: function(error){
				alert(error.status);
			}
		});
	});
});