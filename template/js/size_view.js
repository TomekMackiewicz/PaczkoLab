$(document).ready(function() {

	function loadUserView() {

		$.ajax({
			type: 'GET',
			url: 'http://localhost/coderslab/PaczkoLab/router.php/size/',
			contentType: 'application/json',
			dataType: 'json',
			success: function(response) {
				addContentUser(response);
			},
			error: function(xhr, status, error) {
			  var err = eval("(" + xhr.responseText + ")");
			  console.log(err.Message);
			}

		});

	}

	loadUserView();

	function addContentUser(responseFromAjax) {
		$.each(responseFromAjax, function(key, oSize) {

			// Change this junk
			content  = '<tr>';
			content += '<td>'+oSize.id+'</td>';
			content += '<td>'+oSize.size+'</td>';
			content += '<td>'+oPSize.price+'</td>';			
			content += '</tr>';

			$('.sizes').append(content);

		});
	}

});