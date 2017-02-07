
$(document).ready(function() {

	function loadUserView() {

		$.ajax({
			type: 'GET',
			url: 'http://localhost/coderslab/PaczkoLab/router.php/user/',
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
		$.each(responseFromAjax, function(key, oUser) {

			// Change this junk
			content  = '<tr>';
			content += '<td>';
			content += oUser.id;
			content += '</td>';
			content += '<td>';
			content += oUser.name;
			content += '</td>';
			content += '<td>';
			content += oUser.surname;
			content += '</td>';			
			content += '<td>';
			content += oUser.credits;
			content += '</td>';
			content += '<td>';
			content += oUser.address_id;
			content += '</td>';
			content += '</tr>';

			$('.users').append(content);

		});
	}

});

