 var pg = 0; //progress bar width initially
 document.onreadystatechange = function () {
     if (document.readyState == "interactive") {
         
         var allElem = $("*");
         var length = allElem.length;
         for (var i = 0; i < length; i++) {
             set_elem(allElem[i], length);
         }
         
     }
     
 }

 function set_elem(elem, total) {
     
     var percent_inc = 100 / total; //equally divide 100 among all elements
     
     //if element is loaded
     if ($(elem).length == 1) {
         $('#bar').animate({
             width: pg + percent_inc + "%"
         }, 10, function () {
             if (document.getElementById("bar").style.width == "100%") {
                 //hide the bar
                 $('#bar').fadeOut(350);
             }
         });
         //update the previous width value 
         pg = pg + percent_inc;
     }
     
 }

//Scrollind down to show the pagination of projects


var myScrollFunc = function () {
    var myID = document.getElementById("paginationId");
    var y = window.scrollY;
    if (y >= 800) {
        myID.className = "paginationClass show"
    } else {
        myID.className = "paginationClass hide"
    }
};

window.addEventListener("scroll", myScrollFunc);
