$=function(id) {
	return document.getElementById(id);
}


const bt= document.body.querySelector("button");
console.log(bt);
debugger;
bt && bt.addEventListener("click", function(){
		alert("Helo !!!!!!!!!!")
	});
$("bt-clear").addEventListener("click", function(){
	document.body.innerHTML="";
});

$("bt-dom").addEventListener("click", function(){
	const h2=document.createElement("h2");
	h2.innerText="Sous titre ajouté dynamiquement";
	$("content").appendChild(h2);
	const img=document.createElement("img");
	img.style.width="250px";
	$("")
});