
$(document).ready(function() {

	$('#addUser').submit(function(e) {
		var data = $("#addUser").serialize();
		$.ajax({
			type: 'POST',
			url: 'http://localhost/coderslab/PaczkoLab/router.php/user/',
			data: data,
			success: function(data, textStatus, jqXHR) {
				alert('User added.');
			},
			error: function(xhr, status, error) {
			  var err = eval("(" + xhr.responseText + ")");
			  console.log(err.Message);
			}
		});	
		e.preventDefault();	
	});

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
			content  = '<tr>';
			content += '<td>'+oUser.id+'</td>';
			content += '<td>'+oUser.name+'</td>';
			content += '<td>'+oUser.surname+'</td>';			
			content += '<td>'+oUser.credits+'</td>';
			content += '<td>'+oUser.address_id+'</td>';
			content += '<td>';
			//content += '<button type="button" class="btn btn-default btn-xs edit">Edit</button> ';
		  content += '<button type="button" data-id="'+oUser.id+'"'; 
		  content += 'data-name="'+oUser.name+'" data-surname="'+oUser.surname+'"'; 
		  content += 'data-credits="'+oUser.credits+'"'; 
		  content += 'data-address="'+oUser.address_id+'"'; 
		  content += 'class="btn btn-info btn-xs edit" data-toggle="modal" data-target="#editUser">Edit</button> ';

			content += '<button data-id="'+oUser.id+'" type="button" class="btn btn-danger btn-xs delete">Delete</button>';
			content += '</td>';
			content += '</tr>';
			$('.users').append(content);
		});
	}

 /*
  * Edit user
 */

	$('body').on('click', '.edit', function() {
		//console.log('ok');
		var id = $(this).data("id");
		$(".modal-body #userId").val(id);
		var name = $(this).data("name");
		$(".modal-body #editName").val(name);
		var surname = $(this).data("surname");
		$(".modal-body #editSurname").val(surname);		
		var credits = $(this).data("credits");
		$(".modal-body #editCredits").val(credits);
		var address = $(this).data("address");
		$(".modal-body #editAddress").html(address);
	});

	$('body').on('submit', '#edit', function(e) {
    var id = $(".modal-body #userId").val();

    $.ajax({
      type: "PUT",
      url: "http://localhost/coderslab/PaczkoLab/router.php/user/"+id,
      data: $('#edit').serialize()
		}).done(function() {
			$('.modal').modal('hide');
			setTimeout(function() { 
				location.reload(); 
			}, 1000);
		}).fail(function() {
			console.log('fail');
    });
    e.preventDefault();
	});

 /*
  * Delete user
 */

	$('body').on('click', '.delete', function() {
		//console.log($(this).data("id"));
	  //var confirm = confirm("Are you sure you want to delete?");
	  //console.log(confirm);
	  var hideDeleted = $(this).parent().parent();
	  if (!confirm) {
	  	return false;
	  } else {
			var id = $(this).data("id");
	    $.ajax({
	      url: 'http://localhost/coderslab/PaczkoLab/router.php/user/'+id,
	      data: {"id":id},   	
	      type: "DELETE"
			}).done(function() {
				alert("User deleted.");
				$(hideDeleted).hide();
			}).fail(function() {
				alert("Failed to delete the user.");
	    });	  	
	  }
	});

});




