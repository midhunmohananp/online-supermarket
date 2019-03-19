$(document).ready(function(){
	$(".btn").removeClass('disabled');
  $("#formBrandAdd").validate({
    rules: {
			txtBrandName: {
					required: true,
					remote :{
						url:base_url+"ajax/check_brand_name_excist",
						type:"post",
						data:{
							txtBrandName:function(){
								return $("input[name='txtBrandName']").val();
							}
						}
					}					
			},


	 },
  messages: {
				txtBrandName: {
					required: "Please enter Brand name",
				},
			}
  });
  $('#btnBrandAdd').click(function(){
    $("#formBrandAdd").valid();
  });
  $("#formBrandEdit").validate({
    rules: {
			txtBrandName: {
					required: true,
					remote :{
						url:base_url+"ajax/check_brand_name_excist/"+$("input[name='txtBrandId']").val(),
						type:"post",
						data:{
							txtBrandName:function(){
								return $("input[name='txtBrandName']").val();
							}
						}
					}					
			},


	 },
  messages: {
				txtBrandName: {
					required: "Please enter Brand name",
				},
			}
  });
  $('#btnBrandEdit').click(function(){
    $("#formBrandEdit").valid();
  });
   $('#brandList').dataTable({});

});