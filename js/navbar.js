const navbar= () =>{
    var x = document.getElementById("opekaNavbar");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}