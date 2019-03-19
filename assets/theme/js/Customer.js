$(document).ready(function(){
	$("#btnCustomerAdd").removeClass('disabled');
  $("#formCustomerAdd").validate({
    rules: {
			txtCustomerFirstName: {
					required: true,					
			},
			txtCustomerMiddleName: {
					required: true,					
			},
			txtCustomerLastName: {
					required: true,					
			},
			txtCustomerEmail: {
					required: true,					
			},
			txtCustomerPhone: {
					required: true,					
			},
			txtCustomerWhatsApp: {
					required: true,					
			},
			"txtCustomerGender": {
					required: true,					
			},
			txtCustomerDob: {
					required: true,					
			},
			txtCustomerOccupation: {
					required: true,					
			},
			txtCustomerAddress: {
					required: true,					
			},
			txtCustomerLandmark: {
					required: true,					
			}

	 },
  messages: {
				txtCustomerFirstName: {
					required: "Please enter first name",
				}
			}
  });
  $('#btnCustomerAdd').click(function(){
    $("#formCustomerAdd").valid();
  });
});