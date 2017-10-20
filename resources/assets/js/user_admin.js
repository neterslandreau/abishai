$(function () {

	$('#user-results').on('click', 'input.update-user-form-submit', function(event) {
		var arr = $(this).parents('form')[0]['id'].split('-form-')[1].split('-');
		var field = arr[0];
		var id = arr[1] + '-' + arr[2];
		var value = $('#' + field + '-' + id + ' :selected').val();
		var token = $(this).parents('form')[0]['_token']['value'];
		var data = 'id=' + id + '&value=' + value + '&field=' + field + '&_token=' + token;
		$.post('/user_update', data, function(response) {
			if (response == 1) {
				console.log('success');
				$('#ua-success').html('User updated!').show().fadeOut(5000);
				$('#table-column-' + field + '-' + id).html(value);
			}
		});
	});
});