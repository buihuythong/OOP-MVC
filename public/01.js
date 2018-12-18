
document.querySelector("#table2").classList.add('hidden');
document.querySelector("#table3").classList.add('hidden');

function hiddenAll(){
	document.querySelector("#table1").classList.add('hidden');
	document.querySelector("#table2").classList.add('hidden');
	document.querySelector("#table3").classList.add('hidden');
}
function changeClass(id){
	hiddenAll();
	let elm = document.getElementById(id);
	elm.classList.remove("hidden");
}

var sel = document.querySelector('select').value;


if(sel == "table1") {
	hiddenAll();
	let elm = document.getElementById("table1");
	elm.classList.remove("hidden");
}
if(sel == "table2") {
	hiddenAll();
	let elm = document.getElementById("table2");
	elm.classList.remove("hidden");
}

if(sel == "table3") {
	hiddenAll();
	let elm = document.getElementById("table3");
	elm.classList.remove("hidden");
}