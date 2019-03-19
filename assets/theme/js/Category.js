$(document).ready(function(){
	$(".btn").removeClass('disabled');
  $("#formCategoryAdd").validate({
    rules: {
			txtCategoryName: {
					required: true,	
					remote :{
						url:base_url+"ajax/check_category_name_excist",
						type:"post",
						data:{
							txtCategoryName:function(){
								return $("input[name='txtCategoryName']").val();
							}
						}
					}				
			},
			txtParentCategory: {
					required: true,					
			},

	 },
  messages: {
				txtCategoryName: {
					required: "Please enter Category name",
				},
				txtParentCategory: {
					required: "Please enter parent category",
				},
			}
  });
  $('#btnCategoryAdd').click(function(){
    $("#formCategoryAdd").valid();
  });
    $("#formCategoryEdit").validate({
    rules: {
			txtCategoryName: {
					required: true,	
					remote :{
						url:base_url+"ajax/check_category_name_excist/"+$("input[name='txtCategoryId']").val(),
						type:"post",
						data:{
							txtCategoryName:function(){
								return $("input[name='txtCategoryName']").val();
							}
						}
					}				
			},
			txtParentCategory: {
					required: true,					
			},

	 },
  messages: {
				txtCategoryName: {
					required: "Please enter Category name",
				},
				txtParentCategory: {
					required: "Please enter parent category",
				},
			}
  });
  $('#btnCategoryEdit').click(function(){
    $("#formCategoryEdit").valid();
  });
  $('#categoryList').dataTable({});
});