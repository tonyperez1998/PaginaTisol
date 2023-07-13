
/*function changeTxtImg(material,titulo,texto,imagen,newTit,newTexto,NewImg) {*/
  function changeTxtImg(material,NewImg,NewTit,NewTxt,li1,li2,li3,li4,li5,calibre,acabado) {
  var mat = document.getElementById("material");
  var elem = document.getElementById("imagen");
  var tit = document.getElementById("titulo");
  var txt = document.getElementById("texto");

  /*document.getElementById(material).onclick = function () {     */
  		elem.src = NewImg; 

  	if (NewTit!='') {
		tit.innerHTML = NewTit;
  	} 
  	if (NewTxt!='') {
		txt.innerHTML = NewTxt;
  	} 

  	if (li1!='') {
  		document.getElementById("li1").setAttribute("class","show");
		  document.getElementById("li1").innerHTML = li1;
  	} else {
  		document.getElementById("li1").setAttribute("class","hide");
  	}
  	if (li2!='') {
  		document.getElementById("li2").setAttribute("class","show");
		  document.getElementById("li2").innerHTML = li2;
  	} else {
  		document.getElementById("li2").setAttribute("class","hide");
  	}
  	if (li3!='') {
  		document.getElementById("li3").setAttribute("class","show");
		  document.getElementById("li3").innerHTML = li3;
  	} else {
  		document.getElementById("li3").setAttribute("class","hide");
  	}
  	if (li4!='') {
  		document.getElementById("li4").setAttribute("class","show");
		  document.getElementById("li4").innerHTML = li4;
  	} else {
  		document.getElementById("li4").setAttribute("class","hide");
  	}
  	if (li5!='') {
  		document.getElementById("li5").setAttribute("class","show");
		  document.getElementById("li5").innerHTML = li;
  	} else {
  		document.getElementById("li5").setAttribute("class","hide");
  	}

  	if (calibre!='') {
		  document.getElementById("calibre").innerHTML = calibre;
  	} 
  	if (acabado!='') {
		  document.getElementById("acabado").innerHTML = acabado;
  	} 

/*  }*/  
}

/*
PROBAR esto SUUUPERS!!
  <button onclick="changeColor('blue');">blue</button>
  <button onclick="changeColor('red');">red</button>


  JavaScript Content
function changeColor(newColor) {
  var elem = document.getElementById('para');
  elem.style.color = newColor;

https://developer.mozilla.org/en-US/docs/Web/API/Document/getElementById
  
}


*/