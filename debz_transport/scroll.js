// When the user scrolls down 20px from the top of the document, show the button, slide down the navbar
window.onscroll = function() {scrollFunction()};


function scrollFunction() {
    myfunction();
    theFunction();
}
 
   
function myfunction() {
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-50px";
    }
}



function theFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 20; // For Chrome, Firefox, IE and Opera
}

   