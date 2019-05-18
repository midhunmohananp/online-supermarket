var $invoice_items = [];
$(document).ready(function(e){
  loadPaymentDetails();
  $(".btn").removeClass('disabled');
  $("#saleItemAdd").validate({
    rules: {
			txtInvoiceNumber: {
					required: true,					
			},
			txtInvoiceDate: {
					required: true,
				},
			customers_name: {
					//required: true,
				},
			txtCustomerMobile: {
					//required: true,
					number : true
				},
			product_name: {
					required: true,
				},
			txtProuductUnitPrice: {
					required: true,
					number: true
				},
			txtProductQty: {
					required: true,
					number: true
				},
			txtProductTax: {
					required: true,
					number: true
				},
			txtProductDiscount: {
					required: true,
					number: true
				},
			txtLineTotal: {
					required: true,
					number: true
				}

	 }
  });
  $('#txtAddItem').click(function(event){  	
    if($("#saleItemAdd").valid()) {
    	event.preventDefault();
    	var $txtProductID = $("#txtProductID").val();
    	var $txtStoreID = $("#txtStoreID").val();
    	var $product_name = $("#product_name").val();
    	var $txtProuductUnitPrice = $("#txtProuductUnitPrice").val();
    	var $txtProductTax = $("#txtProductTax").val();
    	var $txtProductQty = $("#txtProductQty").val();
    	var $txtProductDiscount = $("#txtProductDiscount").val();
    	var $txtLineTotal = $("#txtLineTotal").val();
    	var $txtProductStock = $("#txtProductStock").val();
    	var $invoice_item = [];
    	$invoice_item['product_ID'] = $txtProductID;
    	$invoice_item['product_store_ID'] = $txtStoreID;
    	$invoice_item['product_name'] = $product_name;
    	$invoice_item['product_unit_price'] = $txtProuductUnitPrice;
    	$invoice_item['product_tax'] = $txtProductTax;
    	$invoice_item['product_discount'] = $txtProductDiscount;
    	$invoice_item['product_qty'] = $txtProductQty;
    	$invoice_item['product_line_total'] = $txtLineTotal; 
    	if($invoice_items.length > 0) { 
    		var $is_found = 0;
	    	$invoice_items.forEach(function($item) {
	    		if($item.product_ID == $txtProductID) {
	    			$is_found =1;
	    		} 
	    	});
	    	if($is_found == 0) {
	    		addInvoiceItem($invoice_item);
	    	}
	    } else {
	    	addInvoiceItem($invoice_item);
	    }
    	
    }

  });
  $(document).on('click', '.deleteInvoiceItem', function () {
  	 var product_ID = $(this).attr("data-productid");
     $(this).closest('tr').remove();
     deleteInvoiceItem(product_ID);
     return false;
 });
});
function loadCustomer() {
	$("#customers_name").autocomplete({
	    minLength: 1,
	    source: 
	    function(req, add){
	        $.ajax({
	            url: base_url+"customer-name/search",
	            dataType: 'json',
	            type: 'POST',
	            data: req,
	            success:    
	            function(response){
	                if(response.status == true){
	                     add(response.data);
	                 }
	            },
	        });
	    },
	autoFocus: true,
	select: 
	    function(event, ui) {
	      var _data = ui.item;
	        $("#txtCustomerId").val(_data.id);
	        $("#txtCustomerMobile").val(_data.mobile_number);  
	        $("#txtCustomerEmail").val(_data.email);  
	    },      
	}).autocomplete( "widget" ).addClass( "btn-secondary" );
}
function loadProducts() {
	$("#product_name").autocomplete({
	    minLength: 1,
	    source: 
	    function(req, add){
	        $.ajax({
	            url: base_url+"sale/products/search/"+shop_ID,
	            dataType: 'json',
	            type: 'POST',
	            data: req,
	            success:    
	            function(response){
	                if(response.status == true){
	                     add(response.data);
	                 }
	            },
	        });
	    },
	autoFocus: true,
	select: 
	    function(event, ui) {
	      var _data = ui.item;
	        $("#txtStoreID").val(_data.store_ID);
	        $("#txtProductID").val(_data.product_ID);
	        $("#txtProuductUnitPrice").val(_data.unit_price);
	        $("#txtProductTax").val(_data.tax_rate);
	        $("#txtProductQty").val(1);
	        $("#txtProductDiscount").val(0);
	        $line_total = getLineTotal(_data.unit_price,_data.tax_rate,1,0);
	        $("#txtLineTotal").val($line_total);
	        $("#txtProductStock").val(_data.stock);
	    },      
	});
	    
}
function addInvoiceItem(item) {	    	
		$invoice_items.push(item);
		$price = parseInt(item['product_unit_price']);
		$tax = item['product_tax'];
		$quantity = parseInt(item['product_qty']);
		$discount = parseInt(item['product_discount']);
		$tax_amount = ($price*$tax)/100;
		$tax_price = $price+($tax_amount);
		$discount_amount = ($price*$discount)/100;
		$line_total = (($tax_price)-($discount_amount))*$quantity;
		$("#tblItems tr:last").after(
			'<tr>'+
				'<td class="text-center" >'+item['product_name']+'</td>'+
              	'<td class="text-center" >'+item['product_unit_price']+'</td>'+
                '<td class="text-center" >'+item['product_tax']+'</td>'+
                '<td class="text-center" >'+$tax_price+'</td>'+
                '<td class="text-center" >'+item['product_discount']+'</td>'+
                '<td class="text-center" >'+$discount_amount+'</td>'+
                '<td class="text-center" >'+item['product_qty']+'</td>'+
                '<td class="text-center" >'+$line_total+'</td>'+
                '<td class="text-center">'+
                    '<button type="button" style="margin-top: 0px;"  class="btn btn-danger btn-xs deleteInvoiceItem"  data-productid="'+item['product_ID']+'"><i class="fa fa-trash" aria-hidden="true"></i></i></button>'+
                '</td>'+		
			'</tr>'
		);	
		loadPaymentDetails();
}
function deleteInvoiceItem($product_ID) {
	var $index = null;
	for (var i = 0; i <= $invoice_items.length; i++) {
		if($product_ID == $invoice_items[i]['product_ID']) {
			$index = i;
			break;
		}
	}
	if($index != null) {
		$invoice_items.splice($index, 1);	    	
		loadPaymentDetails();
	}
}

function loadPaymentDetails() {
	var $g_sub_total = 0.00;
	var $g_tax_amount = 0.00;
	var $g_discount = 0.00;
	var $grand_total = 0.00;
	$invoice_items.forEach(function(item) {
		$price = parseInt(item['product_unit_price']);
		$tax = parseInt(item['product_tax']);
		$quantity = parseInt(item['product_qty']);
		$discount = parseInt(item['product_discount']);
		$tax_amount = ($price*$tax)/100;
		$tax_price = $price+($tax_amount);
		$discount_amount = ($price*$discount)/100;
		$line_total = (($tax_price)-($discount_amount))*$quantity;

		$g_sub_total = $g_sub_total+$price;
		$g_tax_amount = $g_tax_amount+$tax_amount;
		$g_discount = $g_discount+$discount_amount;
		$grand_total = $grand_total+$line_total;
	});
	$("#subTotal").html(toCurrency($g_sub_total));
	$("#taxAmount").html(toCurrency($g_tax_amount));
	$("#discount").html(toCurrency($g_discount));
	$("#grandTotal").html(toCurrency($grand_total));
}
function getLineTotal($price,$tax,$quantity,$discount) {
	$price = parseInt($price);
	$tax = parseInt($tax);
	$quantity = parseInt($quantity);
	$discount = parseInt($discount);
	$tax_amount = ($price*$tax)/100;
	$discount_amount = ($price*$discount)/100;
	$line_total = ($price+($tax_amount)-($discount_amount))*$quantity;
	return toCurrency($line_total);
}