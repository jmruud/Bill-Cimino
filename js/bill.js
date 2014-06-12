var drawer = $("#drawer");
function exposeDrawer() {
	drawer.animate({
		marginLeft: '0'}, 750, 'swing');
}

$(function(){
	exposeDrawer();
});