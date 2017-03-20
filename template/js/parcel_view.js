$(document).ready(function() {

	function loadUserView() {

		$.ajax({
			type: 'GET',
			url: 'http://localhost/coderslab/PaczkoLab/router.php/parcel/',
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
		$.each(responseFromAjax, function(key, oParcel) {

			// Change this junk
			content  = '<tr>';
			content += '<td>'+oParcel.id+'</td>';
			content += '<td>'+oParcel.receiver+'</td>';
			content += '<td>'+oParcel.size+'</td>';			
			content += '</tr>';

			$('.parcels').append(content);

		});
	}

});