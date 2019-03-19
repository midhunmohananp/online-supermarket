$(document).ready(function(){
	$("#btnUnitAdd").removeClass('disabled');
  $("#formUnitAdd").validate({
    rules: {
			txtUnitName: {
					required: true,	
					remote :{
						url:base_url+"ajax/check_unit_name_excist",
						type:"post",
						data:{
							txtUnitName:function(){
								return $("input[name='txtUnitName']").val();
							}
						}
					}				
			},
			txtUnitSymbol: {
					required: true,					
			},

	 },
  messages: {
				txtUnitName: {
					required: "Please enter Unit name",
				},
				txtUnitSymbol: {
					required: "Please enter unit symbol",
				},
			}
  });
  $('#btnUnitAdd').click(function(){
    $("#formUnitAdd").valid();
  });
});