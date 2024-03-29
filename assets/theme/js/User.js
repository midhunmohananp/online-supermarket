$(document).ready(function(){
	$(".btn").removeClass('disabled');
  $("#formUserAdd").validate({
    rules: {
			txtUserName: {
					required: true,
					remote :{
						url:base_url+"ajax/check_user_name_excist",
						type:"post",
						data:{
							txtUserName:function(){
								return $("input[name='txtUserName']").val();
							}
						}
					}					
			},
			txtUserPassword: {
					required: true,					
			},
			txtUserType: {
					required: true,					
			},
			txtUserConfirmPassword: {
					required: true,	
					equalTo:"#txtUserPassword"			
			},
			txtUserFirstName: {
					required: true,					
			},
			txtUserMiddleName: {
					required: true,					
			},
			txtUserLastName: {
					required: true,					
			},
			txtUserEmail: {
					required: true,	
					remote :{
						url:base_url+"ajax/check_user_email_excist",
						type:"post",
						data:{
							txtUserEmail:function(){
								return $("input[name='txtUserEmail']").val();
							}
						}
					}				
			},
			txtUserPhone: {
					required: true,					
			},
			txtUserAddress: {
					required: true,					
			}

	 },
  messages: {
				txtUserName: {
					required: "Please enter User name",
				},
				txtUserType: {
					required: "Please enter User symbol",
				},
			}
  });
  $('#btnUserAdd').click(function(){
    $("#formUserAdd").valid();
  });
    $("#formUserEdit").validate({
    rules: {
			txtUserPassword: {
					required: true,					
			},
			txtUserType: {
					required: true,					
			},
			txtUserConfirmPassword: {
					required: true,	
					equalTo:"#txtUserPassword"			
			},
			txtUserFirstName: {
					required: true,					
			},
			txtUserMiddleName: {
					// required: true,					
			},
			txtUserLastName: {
					// required: true,					
			},
			txtUserPhone: {
					required: true,					
			},
			txtUserAddress: {
					required: true,					
			}

	 }
  });
  $('#btnUserEdit').click(function(){
    $("#formUserEdit").valid();
  });
  $('#userList').dataTable({});
    $('#modalUserDelete').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var userID = button.data('userid') 
  var modal = $(this)
  modal.find('#txtUserId').val(userID)
})
});