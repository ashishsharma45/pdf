var color1 = document.querySelector('#color1');
var color2 = document.querySelector('#color2');
var text = document.querySelector('#text_name');

var body = document.getElementById('test');

var p = document.getElementById('p');

function setBody() {
	body.style.background = 'linear-gradient(to right,'+color1.value+', '+color2.value+')';
}

color1.addEventListener('input',setBody);
color2.addEventListener('input',setBody);

function textAdd(){

	var para = document.createElement("P");               // Create a <p> element
	para.innerHTML = text.value;  
	p.appendChild(para); 
}
text.addEventListener('input',textAdd);