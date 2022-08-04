const parallax = document.getElementById("parallax");

window.addEventListener("scroll", function(){
	let offset = window.pageYOffset;
	parallax.style.backgroundPositionY = offset * 0.7 + "px";
	
})

const paralla = document.getElementById("paralla");

window.addEventListener("scroll", function(){
	let offset = window.pageYOffset;
	paralla.style.backgroundPositionY = offset * -0.15 + "px";
	
})

