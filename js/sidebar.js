
	/* бургер меню*/
	$(document).ready(function(){
			var link = $('.sidebar-link');
			var link_active = $('.sidebar-link_active');
			var sidebar = $('.sidebar-wrap');

			link.click(function(){
					link.toggleClass('sidebar-link_active');
					sidebar.toggleClass('sidebar-wrap_active')
			});
			link_active.click(function(){
					link.toggleClass('sidebar-link');
			});


	});


	/*активный пункт меню*/
	$(document).ready(function(){
		var location = window.location.href;
		var cur_url = location.split('/').pop();
		
		$('.sidebar .sidebar-item').each(function () {
		 var addr = $(this).find('a').attr('href');
		 
		 if(cur_url == addr) $(this).addClass('sidebar-item_current');
		});
	});

$(document).ready(function () {
	$('[data-toggle="tooltip"]').tooltip();
});
