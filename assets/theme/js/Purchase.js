$(document).ready(function(){
	$(".btn").removeClass('disabled');
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
					number: true,
			},
			txtProductTax: {
					required: true,
			},
			txtProductUnitPrice: {
					required: true,
					number: true,
			},
			txtProductPurchasePrice: {
					required:true,
					number: true,
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
  $("#formPurchaseEdit").validate({
    rules: {
			txtProductUOM: {
					required: true,
			},
			txtProductQty: {
					required: true,
					number: true,
			},
			txtProductTax: {
					required: true,
			},
			txtProductUnitPrice: {
					required: true,
					number: true,
			},
			txtProductPurchasePrice: {
					required:true,
					number: true,
			}
	 }
  });
  $('#btnPurchaseEdit').click(function(){
    $("#formPurchaseEdit").valid();
  });
 
        $('#purchaseList').dataTable({
          // "bPaginate": true,
          // "bLengthChange": false,
          // "bFilter": false,
          // "bSort": true,
          // "bInfo": true,
          // "bAutoWidth": false
        });
  $('#modalPurchaseDelete').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var storeID = button.data('storeid') 
  var modal = $(this)
  modal.find('#txtStoreID').val(storeID)
})

});
