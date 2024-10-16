var burger_btn = document.getElementById("burger-btn");
var menuMobile = document.getElementsByClassName("menu-mobile")[0]; // Учитываем, что меню одно

burger_btn.addEventListener("click", function(){
    if (menuMobile.style.display === "block") {
        menuMobile.style.display = "none";
    } else {
        menuMobile.style.display = "block";
    }
});

var info_movie = document.getElementById("info_movie");

var about_link = document.getElementById("about");
about_link.addEventListener("click", function(){
    info_movie.innerHTML = "Action/Drama & Thrillers <br> (1999) 2 hr 19 min <br> <p>A depressed man (Edward Norton) suffering from insomnia meets a charismatic soap salesman named Tyler Durden (Brad Pitt). As their friendship deepens, they form an underground fight club that spirals into something far more dangerous than either of them anticipated...</p>";
});

    var about_link = document.getElementById("cast");
    about_link.addEventListener("click", function(){
        info_movie.innerHTML = "The Fight Club cast includes Brad Pitt as Tyler, Edward Norton as the Narrator, Helena Bonham Carter as Marla, Meat Loaf as Robert, and Jared Leto as Angel Face.";
});

var about_link = document.getElementById("reviews");
about_link.addEventListener("click", function(){
    info_movie.innerHTML = "Very good film";
});