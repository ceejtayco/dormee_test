
$(document).ready(function(){
  
 var slider1 = document.getElementById("slider1");
 var output1 = document.getElementById("value1");
 var slider2 = document.getElementById("slider2");
 var output2 = document.getElementById("value2");
 var slider3 = document.getElementById("slider3");
 var output3 = document.getElementById("value3");
 var slider4 = document.getElementById("slider4");
 var output4 = document.getElementById("value4");
 var slider5 = document.getElementById("slider5");
 var output5 = document.getElementById("value5");
 output1.innerHTML = slider1.value;
 output2.innerHTML = slider2.value;
 output3.innerHTML = slider3.value;
 output4.innerHTML = slider4.value;
 output5.innerHTML = slider5.value;

 slider1.oninput = function() {
  output1.innerHTML = this.value;
}
slider2.oninput = function() {
  output2.innerHTML = this.value;
}
slider3.oninput = function() {
  output3.innerHTML = this.value;
}
slider4.oninput = function() {
  output4.innerHTML = this.value;
}
slider5.oninput = function() {
  output5.innerHTML = this.value;
}



var filtersBox = document.getElementById("filtersBox");
var btnShowFilters = document.getElementById("btnShowFilters");

btnShowFilters.addEventListener("click", showFilters);


function showFilters() {
  filtersBox.style.display == "none" ? filtersBox.style.display = "block" : filtersBox.style.display = "none";
}


});