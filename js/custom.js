$(document).ready(function(){
		if($('#meBTN').click(function(){
			var mmName = $('#mmName').val();
			var meDate = $('#meDate').val();
			var mepName = $('#mepName').val();
			var mepPrice = $('#mepPrice').val();
			var meSubmit =$('#meBTN').val();
			// alert(mmName + meDate + mepName + mepPrice);

			$.post('classes/valuesInsert.php',{
				mmName:mmName,
				meDate:meDate,
				mepName:mepName,
				mepPrice:mepPrice,
				meSubmit:meSubmit
			},
			function(result){
				alert(result);
				$('#mmName').val('');
				$('#meDate').val('');
				$('#mepName').val('');
				$('#mepPrice').val('');


			})
		}));
		
	});