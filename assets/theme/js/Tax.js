$(document).ready(function(){
	$("#btnTaxAdd").removeClass('disabled');
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
});