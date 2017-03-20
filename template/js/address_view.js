$(document).ready(function() {

	function loadAddressView() {

		$.ajax({
			type: 'GET',
			url: 'http://localhost/coderslab/PaczkoLab/router.php/address/',
			contentType: 'application/json',
			dataType: 'json',
			success: function(response) {
				addContentAddress(response);
			},
			error: function(xhr, status, error) {
			  var err = eval("(" + xhr.responseText + ")");
			  console.log(err.Message);
			}

		});

	}

	loadAddressView();

	function addContentAddress(responseFromAjax) {
		$.each(responseFromAjax, function(key, oAddress) {

			// Change this junk
			content  = '<tr>';
			content += '<td>'+oAddress.id+'</td>';
			content += '<td>'+oAddress.city+'</td>';
			content += '<td>'+oAddress.code+'</td>';			
			content += '<td>'+oAddress.street+'</td>';
			content += '<td>'+oAddress.flat+'</td>';
			content += '</tr>';

			$('.addresses').append(content);

		});
	}

});