function funcPrincipal() 
{
	asignarActivo();

	var crojo = document.getElementById('cRojo');
	crojo.addEventListener('click', fijarRojo);
	var cazul = document.getElementById('cAzulClaro');
	cazul.addEventListener('click', fijarAzulClaro);
	var cverde = document.getElementById('cVerde');
	cverde.addEventListener('click', fijarVerde);		
}

function asignarActivo() 
{
	var enlaces = document.getElementsByClassName("link");
	for(i=0; i<enlaces.length; ++i)
		if(location.href==enlaces[i].href)
			enlaces[i].className = "link active";
}

function fijarRojo() 
{
	document.body.style.background = "red";
	document.body.style.color = "black";
}

function fijarAzulClaro() 
{
	document.body.style.background = "lightblue";
	document.body.style.color = "black";
}

function fijarVerde() 
{
	document.body.style.background = "green";
	document.body.style.color = "white";
}