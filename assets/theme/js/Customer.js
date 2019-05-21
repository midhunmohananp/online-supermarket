$(document).ready(function(){
	$(".btn").removeClass('disabled');
  $("#formCustomerAdd").validate({
    rules: {
			txtCustomerFirstName: {
					required: true,					
			},
			txtCustomerMiddleName: {
					// required: true,					
			},
			txtCustomerLastName: {
					// required: true,					
			},
			txtCustomerEmail: {
				email:true
					// required: true,					
			},
			txtCustomerPhone: {
					required: true,					
			},
			txtCustomerWhatsApp: {
					// required: true,					
			},
			"txtCustomerGender": {
					required: true,					
			},
			txtCustomerDob: {
					required: true,					
			},
			txtCustomerOccupation: {
					// required: true,					
			},
			txtCustomerAddress: {
					// required: true,					
			},
			txtCustomerLandmark: {
					// required: true,					
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
    $("#formCustomerEdit").validate({
    rules: {
			txtCustomerFirstName: {
					required: true,					
			},
			txtCustomerMiddleName: {
					// required: true,					
			},
			txtCustomerLastName: {
					// required: true,					
			},
			txtCustomerEmail: {
				email:true
					// required: true,					
			},
			txtCustomerPhone: {
					required: true,					
			},
			txtCustomerWhatsApp: {
					// required: true,					
			},
			"txtCustomerGender": {
					required: true,					
			},
			txtCustomerDob: {
					required: true,					
			},
			txtCustomerOccupation: {
					// required: true,					
			},
			txtCustomerAddress: {
					// required: true,					
			},
			txtCustomerLandmark: {
					// required: true,					
			}

	 },
  messages: {
				txtCustomerFirstName: {
					required: "Please enter first name",
				}
			}
  });
   $('#btnCustomerEdit').click(function(){
    $("#formCustomerEdit").valid();
  });
  $('#customerList').dataTable({});
  $('#modalCustomerDelete').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var customerID = button.data('customerid')
	  var modal = $(this)
	  modal.find('#txtCustomerId').val(customerID)
	})
});