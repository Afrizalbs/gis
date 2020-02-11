// Script untuk Sidebar
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.2)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}

// untuk mendapatkan jwpopup
var jwpopup = document.getElementById('jwpopupBox');
// untuk mendapatkan link untuk membuka jwpopup
var mpLink = document.getElementById("jwpopupLink");
// untuk mendapatkan aksi elemen close
var close = document.getElementsByClassName("close")[0];
// membuka jwpopup ketika link di klik
mpLink.onclick = function () {
    jwpopup.style.display = "block";
}
// membuka jwpopup ketika elemen di klik
close.onclick = function () {
    jwpopup.style.display = "none";
}
// membuka jwpopup ketika user melakukan klik diluar area popup
window.onclick = function (event) {
    if (event.target == jwpopup) {
        jwpopup.style.display = "none";
    }
}



