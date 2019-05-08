var $invoice_items = [];
$(document).ready(function(e){
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
					required: true,
				},
			txtCustomerMobile: {
					required: true,
				},
			product_name: {
					required: true,
				},
			txtProuductUnitPrice: {
					required: true,
				},
			txtProductQty: {
					required: true,
				},
			txtProductTax: {
					required: true,
				},
			txtProductDiscount: {
					required: true,
				},
			txtLineTotal: {
					required: true,
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
    	$invoice_item['product_unit_price'] = $txtProductID;
    	$invoice_item['product_tax'] = $txtProductTax;
    	$invoice_item['product_discount'] = $txtProductID;
    	$invoice_item['product_qty'] = $txtProductID;
    	$invoice_item['product_line_total'] = $txtLineTotal; 
    	if($invoice_items.length > 0) {   	
	    	$invoice_items.forEach(function($item) {
	    		console.log($item);
	    		console.log($item.product_ID);
	    		console.log($txtProductID);
	    		if($item.product_ID == $txtProductID) {
	    			console.log('already excist');
	    		} else {
	    			addInvoiceItem($invoice_item);
	    		}
	    	});
	    } else {
	    	
	    }
    	
    }

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
	});
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
	        $("#txtProductStock").val(_data.stock);
	    },      
	});
}
function addInvoiceItem(item) {	    	
		$invoice_items.push($item);
		$("#tblItems tr:last").after(
			'<tr>'+
				'<td class="text-center" >'+item['product_name']+'</td>'+
              	'<td class="text-center" >'+item['product_unit_price']+'</td>'+
                '<td class="text-center" >'+item['product_discount']+'</td>'+
                '<td class="text-center" >Discount Price</td>'+
                '<td class="text-center" >'+item['product_qty']+'</td>'+
                '<td class="text-center" >'+item['product_line_total']+'</td>'+
                '<td class="text-center">'+
                    '<button type="button" style="margin-top: 0px;" name="remove[]" id="" class="btn btn-danger btn-xs" onclick="removeRow(this)"><i class="fa fa-trash" aria-hidden="true"></i></i></button>'+
                '</td>'+		
			'</tr>'
		);
}