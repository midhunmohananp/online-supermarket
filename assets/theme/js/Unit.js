$(document).ready(function(){
	$(".btn").removeClass('disabled');
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
    $("#formUnitEdit").validate({
    rules: {
			txtUnitName: {
					required: true,	
					remote :{
						url:base_url+"ajax/check_unit_name_excist/"+$("input[name='txtUnitId']").val(),
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
  $('#btnUnitEdit').click(function(){
    $("#formUnitEdit").valid();
  });
  $('#unitList').dataTable({});
  $('#modalUnitDelete').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var unitID = button.data('unitid') 
  var modal = $(this)
  modal.find('#txtUnitId').val(unitID)
})
});