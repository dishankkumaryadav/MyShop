document.getElementsByClassName("fa")[3].addEventListener("click", function(){
    document.getElementsByClassName("links")[0].classList.toggle("showmylinks")
});


// javascript for automatic image slider 
var counter = 1;
setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter>4){
        counter = 1;
    }
}, 5000);
// javascript for automatic image slider 