$(document).ready(function(){
	var target = $('#px-system-menu-orders-dragable').attr('target');
	$('.panel-dragable').sortable({
		cursor: 'move',
		axis: 'y',
		stop: function(event, ui){
			var data = $(this).sortable('serialize');
			$.ajax({
				type: 'POST',
				dataType: 'json',
				data : data,
				url : target,
				success: function(response) {
          $('#menu_orders .alert-warning').addClass('hidden');
          if (response.status == 'ok') {
            $('#menu_orders .alert-success').removeClass('hidden').children('span').text(response.msg);
						setTimeout(function(){
  						$('#menu_orders .alert-success').addClass('hidden');
							$('#menu_orders .alert-warning').removeClass('hidden');
						}, 2000);
          } else
            $('#menu_orders .alert-danger').removeClass('hidden').children('span').text(response.msg);
        },
			});
		}
	});
	$('.panel-dragable .list-group').sortable({
		cursor: 'move',
		axis: 'y',
		stop: function(event, ui){
			var data = $(this).sortable('serialize');
			$.ajax({
				type: 'POST',
				dataType: 'json',
				data : data,
				url : target,
				success: function(response) {
          $('#menu_orders .alert-warning').addClass('hidden');
          if (response.status == 'ok') {
            $('#menu_orders .alert-success').removeClass('hidden').children('span').text(response.msg);
						setTimeout(function(){
  						$('#menu_orders .alert-success').addClass('hidden');
							$('#menu_orders .alert-warning').removeClass('hidden');
						}, 2000);
          } else
            $('#menu_orders .alert-danger').removeClass('hidden').children('span').text(response.msg);
        },
			});
		}
	});
})
