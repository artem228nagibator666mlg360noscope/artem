var burger_btn = document.getElementById("burger-btn");
var a = document.getElementsByClassName("menu-mobile");

for (let i = 0; i < a.length; i++) {
    a[i].style.display = "block";         
}

burger_btn.addEventListener("click", function(){
    for (let i = 0; i < a.length; i++) {
        if (a[i].style.display == "block"){
            a[i].style.display = "none";
        }else{
            a[i].style.display = "block";
        }
    }
});