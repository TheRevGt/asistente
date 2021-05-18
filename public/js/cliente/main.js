dysbienv = document.getElementById('DivBien');
btnItems = document.getElementById('vamos');
dysmenu = document.getElementById("DivMenu");

dysmenu.style.display = "none";

btnItems.addEventListener("click", function(){
dysmenu.style.display = "block";
dysbienv.style.display = "none";
});