function dropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
    document.getElementById("profile-arrow").classList.toggle("rotate");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
    if(event.target.matches('#btn-reveal')){
      let el = document.getElementById('reveal-content');
      var arrow = document.getElementById('profile-arrow');
      if (el.classList.contains('hide')) {
        el.classList.remove('hide');
        
      } else {
        el.classList.add('hide');
      }
      if(arrow.classList.contains('rotate')){
        arrow.classList.remove('rotate');
      }else{
        arrow.classList.add('rotate');
      }
      }
  }

/*Responsive */
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

/* Navbar scroll */
window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      navbar.className = " w3-card" + " w3-animate-top" + " w3-white";
    } else {
      navbar.className = navbar.className.replace("w3-card w3-animate-top w3-white", "w3-bar");
    }
  }


document.getElementById('btn-reveal').addEventListener('click', function() {
  let el = document.getElementById('reveal-content');
  if (el.classList.contains('hide')) {
    el.classList.remove('hide');
  } else {
    el.classList.add('hide');
  }
});


/*carosello
let slideIndex = 0;
carosello.showSlides(slideIndex);

function showSlides(slideIndex) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}*/


/*Script dei messaggi!!!!*/
var openInbox = document.getElementById("myBtn");
        openInbox.click();

        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        function myFunc(id) {
            var x = document.getElementById(id);
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
                x.previousElementSibling.className += " w3-red";
            } else {
                x.className = x.className.replace(" w3-show", "");
                x.previousElementSibling.className =
                    x.previousElementSibling.className.replace(" w3-red", "");
            }
        }

        openMail("")

        function openMail(personName) {
            var i;
            var x = document.getElementsByClassName("person");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x = document.getElementsByClassName("test");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" w3-light-grey", "");
            }
            document.getElementById(personName).style.display = "block";
            event.currentTarget.className += " w3-light-grey";}

        var openTab = document.getElementById("firstTab");
        openTab.click();

        /**
         * 
         * 
         *
         */

        