$(window).load(function(){

	var _temp;

	/* KUN-NAV-RESPONSIVE */
	$('#kun-nav-responsive a.main').each(function(index){
		_temp = $(this).next('ul.item');
		if(_temp.length >= 1){
			$(this).find('i.main-arrow').css({'display':'inline-block'});
		}
	});
	$('#kun-navbar-responsive').click(function(){
		$('#kun-nav-responsive').toggleClass('navigation-show');
	});
	$('#kun-nav-responsive a.main').click(function(){
		if($('#kun-navbar-responsive').is(':hidden') == false){
			_temp = $(this).next('ul.item');
			if(_temp.length >= 1){
				_temp.slideToggle('fast', function(){});
				return false;
			}
		}
	});

});


$(document).mouseup(function(e){
	/*
	var _container;
	_container = $('#kun-nav-responsive');
	if (!_container.is(e.target) && _container.has(e.target).length === 0){
		$('#kun-nav-responsive').removeClass('navigation-show');
	}
	*/
});