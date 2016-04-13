/*
 * Getting menu list items and adding them in mobile view mainmenu-mobile div
 */

$(document).on('click', '.mobile-menu-img', function(){
	
	//	Getting menu items
	var menuHtml = $('#'+'mainmenu').html();
	
//	adding menu items in mobile div
	$('#'+'mainmenu-mobile').html(menuHtml);	
	
	// making mobile menu appear
	var menuItems = $('#'+'mainmenu-mobile');
	menuItems.fadeToggle();
});