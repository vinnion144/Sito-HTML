
var slideIndex = 1;
let j = 0;
var timer = setInterval(change, 6000);
change(j);
function change(j) {
if (j == 1 || j == -1 ) {
    if (j==1) {
        var i;
        var x = document.getElementsByClassName("slide");
        for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        if (slideIndex < 1) {slideIndex = x.length} 
        x[slideIndex-1].style.display = "block";
        clearInterval(timer);
        timer = setInterval(change, 6000);
    } else {
        var i;
        var x = document.getElementsByClassName("slide");
        for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
        }
        slideIndex--;
        if (slideIndex > x.length) {slideIndex = 1} 
        if (slideIndex < 1) {slideIndex = x.length}
        x[slideIndex-1].style.display = "block";
        clearInterval(timer);
        timer = setInterval(change, 5000);
    }
} else {
    var i;
    var x = document.getElementsByClassName("slide");
    for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    if (slideIndex < 1) {slideIndex = x.length}  
    x[slideIndex-1].style.display = "block";
}
}
