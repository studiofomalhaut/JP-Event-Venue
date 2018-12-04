 /* Sticky navigation bar */
window.onscroll = () => {
    const navbar = document.getElementById("navbar");
    const info = document.getElementById("info");
    const sticky = info.offsetTop;

    if (window.pageYOffset > sticky) {
        navbar.classList.add("sticky") 
    } else {
        navbar.classList.remove("sticky");
    }
}

/*Mobile links toggle*/

openMenu = () => {
    const mobLinks = document.getElementsByClassName("container-links");
    mobLinks.style.display = "none" ? mobLinks.style.display = "block" : mobLinks.style.display = "none";
};
document.getElementById('icon').addEventListener('click', openMenu);



/* Google Map */
 function initMap() {
    var jardinspaloma = {lat: -25.943964, lng: 32.469737};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 11,
      center: jardinspaloma
  });
  var marker = new google.maps.Marker({
      position: jardinspaloma,
      map: map,
      title: 'Jardins Paloma',
    
  });
  }