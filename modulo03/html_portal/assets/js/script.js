window.onload = function(){
	var slidewidth = document.getElementById("slideshow").offsetWidth;
	var objs = document.getElementsByClassName("slide");
	for(var i in objs){
		objs[i].style.width = slidewidth;
	}
};