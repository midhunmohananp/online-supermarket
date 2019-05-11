$(document).ready(function(){
	$(".btn").removeClass('disabled');
  $("#formProductAdd").validate({
    rules: {
			txtProductName: {
					required: true,					
			},
      txtProductDescription: {
					// required: true,					
			},
			txtProductHSN: {
								required: true,
								remote :{
						url:base_url+"ajax/check_product_hsn_excist",
						type:"post",
						data:{
							txtProductHSN:function(){
								return $("input[name='txtProductHSN']").val();
							}
						}
					}
						},
			txtProductColor: {
					// required: true,
			},
			txtProductSize: {
					// required: true,
					number:true
			},
			txtProductCategory: {
					required: true,
			},
			txtProductUOM: {
					required: true,
			},
			/*productFile: {
					required: true,
			}*/

	 },
  messages: {
				txtProductName: {
					required: "Please enter product name",
				},
        txtProductDescription: {
					required: "Please enter product description",
				}
			}
  });
  $('#btnProductAdd').click(function(){
    $("#formProductAdd").valid();
  });

 
        $('#productList').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });


});
// txtProductSKU: {
// 					required: true,
// 					remote :{
// 						url:base_url+"ajax/check_product_sku_excist",
// 						type:"post",
// 						data:{
// 							txtProductSKU:function(){
// 								return $("input[name='txtProductSKU']").val();
// 							}
// 						}
// 					}
// 			},