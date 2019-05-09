$(document).ready(function(){
$(".btn").removeClass('disabled');
  $("#formTaxAdd").validate({
    rules: {
			txtTaxName: {
					required: true,
					remote :{
						url:base_url+"ajax/check_tax_name_excist",
						type:"post",
						data:{
							txtTaxName:function(){
								return $("input[name='txtTaxName']").val();
							}
						}
					}					
			},
			txtTaxRate: {
					required: true,			
					number:true		
			},

	 },
  messages: {
				txtTaxName: {
					required: "Please enter Tax name",
				},
				txtTaxRate: {
					required: "Please enter Tax rate",
				},
			}
  });
  $('#btnTaxAdd').click(function(){
    $("#formTaxAdd").valid();
  });
    $("#formTaxEdit").validate({
    rules: {
			txtTaxName: {
					required: true,
					remote :{
						url:base_url+"ajax/check_tax_name_excist/"+$("input[name='txtUnitId']").val(),
						type:"post",
						data:{
							txtTaxName:function(){
								return $("input[name='txtTaxName']").val();
							}
						}
					}					
			},
			txtTaxRate: {
					required: true,			
					number:true		
			},

	 },
  messages: {
				txtTaxName: {
					required: "Please enter Tax name",
				},
				txtTaxRate: {
					required: "Please enter Tax rate",
				},
			}
  });
  $('#btnTaxEdit').click(function(){
    $("#formTaxEdit").valid();
  });
  $('#taxList').dataTable({});
});