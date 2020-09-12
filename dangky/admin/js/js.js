  $(document).ready(function(){
    $("a.diamondToggle").click(function(){
		if($(this).attr("rel")==0){
			$.ajax({
				type: "GET",
				url: "ajax/ajax.php",
				data:{
                    controller: 'display',
					id: $(this).attr("data-val0"),
					table: $(this).attr("data-val2"),
					type: $(this).attr("data-val3"),
					value:1
				}
			});
			$(this).addClass("diamondToggleOff");
			$(this).attr("rel",1);
			
		}else{
			
			$.ajax({
				type: "GET",
				url: "ajax/ajax.php",
				data:{
                    controller: 'display',
					id: $(this).attr("data-val0"),
					table: $(this).attr("data-val2"),
					type: $(this).attr("data-val3"),
					value:0
					}
			});
			$(this).removeClass("diamondToggleOff");
					$(this).attr("rel",0);
		}

	});
	$("#id_list").change(function(){
		var kt = $(this).data('id');
		$.ajax({
			type: "GET",
			url: "ajax/ajax.php",
			data:{
				controller: 'productajax',
				action: 'listajax',
				id: $(this).val(),
			},
			success: function(data){
				$('.formx').html(data);
			}
		});
	});
	
  });
function deleteCart(d){
    var results = confirm("Bạn muốn xóa này không?");
    if(results == true){
        window.location.href = d;
    }else{
        return false;
    }
}

