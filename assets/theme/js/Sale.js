$(document).ready(function(){
	$(".btn").removeClass('disabled');
  $("#saleItemAdd").validate({
    rules: {
			txtInvoiceNumber: {
					required: true,					
			},
			txtInvoiceDate: {
					required: true,
				},
			txtCustomerName: {
					required: true,
				},
			txtCustomerNumber: {
					required: true,
				},
			txtProduct: {
					required: true,
				},
			txtProuductUnitPrice: {
					required: true,
				},
			txtProductUom: {
					required: true,
				},
			txtProductqty: {
					required: true,
				},
			txtProductTax: {
					required: true,
				},
			txtProductDiscount: {
					required: true,
				},
			txtProductTotal: {
					required: true,
				}



	 }
  });
  $('#txtAddItem').click(function(){
    $("#saleItemAdd").valid();
  });

$('.js-example-basic-single').select2({
	placeholder: 'Select Product',
        ajax: {
          url: base_url+'ajax/shop_product_search_by_name',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
});



});