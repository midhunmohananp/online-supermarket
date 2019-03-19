$(document).ready(function(){
	$("#btnPurchaseAdd").removeClass('disabled');
  $("#formPurchaseAdd").validate({
    rules: {
			txtProductID: {
					required: true,					
			},
			txtProductUOM: {
					required: true,
			},
			txtProductSKU: {
					required: true,
					remote :{
						url:base_url+"ajax/check_product_sku_excist",
						type:"post",
						data:{
							txtProductSKU:function(){
								return $("input[name='txtProductSKU']").val();
							}
						}
					}
			},
			txtProductQty: {
					required: true,
			},
			txtProductTax: {
					required: true,
			},
			txtProductUnitPrice: {
					required: true,
			},
			txtProductPurchasePrice: {
					required: true,
			}
	 },
  messages: {
				txtProductID: {
					required: "Please enter product name",
				},

			}
  });
  $('#btnPurchaseAdd').click(function(){
    $("#formPurchaseAdd").valid();
  });

 
        $('#purchaseList').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });


});
