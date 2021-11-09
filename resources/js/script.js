$(document).ready(function() {
	$('.header_burger').click(function(event) {
		$('.header_burger,.header_menu,.header_list').toggleClass('active');
		$('body').toggleClass('lock');
	});
});

document.getElementById('slider-left').onclick = sliderLeft;

var left = 0;



function sliderLeft() {
	var polosa = document.getElementById('polosa');
	var width = window.outerWidth;
	left = left - 80;
	if (width<820) {
		if(left < -160) {
		left = 0;
	}
}else{
	if(left < -80) {
		left = 0;
}
	}
	polosa.style.left = left+'px';

}

document.getElementById('slider-right').onclick = sliderRight;


function sliderRight() {
	var polosa = document.getElementById('polosa');
	left = left + 80;
	if(left > 0) {
		left = 0;
	}
	polosa.style.left = left+'px';
}

$('.delete-btn').click(function(){
	var res = confirm('Подтвердите действие');
	if(!res){
		return false;
	}
});

