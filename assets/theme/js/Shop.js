$(document).ready(function(){
	$(".btn").removeClass('disabled');
  $("#formShopAdd").validate({
    rules: {
			txtShopName: {
					required: true,					
			},
      txtShopLocation: {
					required: true,
					remote :{
						url:base_url+"ajax/check_shop_excist_location",
						type:"post",
						data:{
							txtShopLocation:function(){
								return $("input[name='txtShopLocation']").val();
							}
						}
					}
			},
			txtShopAddress: {
					required: true,
			}

	 },
  messages: {
				txtShopName: {
					required: "Please enter shop name",
				},
        txtShopLocation: {
					required: "Please enter shop location",
				},
				txtShopAddress: {
					required: "Please enter shop address",
				},
			}
  });
  $('#btnShopAdd').click(function(){
    $("#formShopAdd").valid();
  });
  $("#formShopEdit").validate({
    rules: {
			txtShopName: {
					required: true,					
			},
      txtShopLocation: {
					required: true,
					remote :{
						url:base_url+"ajax/check_shop_excist_location/"+$("input[name='txtShopID']").val(),
						type:"post",
						data:{
							txtShopLocation:function(){
								return $("input[name='txtShopLocation']").val();
							}
						}
					}
			},
			txtShopAddress: {
					required: true,
			}

	 },
  messages: {
				txtShopName: {
					required: "Please enter shop name",
				},
        txtShopLocation: {
					required: "Please enter shop location",
				},
				txtShopAddress: {
					required: "Please enter shop address",
				},
			}
  });
  $('#btnShopEdit').click(function(){
    $("#formShopEdit").valid();
  });
   $('#shopList').dataTable({});

});