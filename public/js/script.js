function show_answer(element){
    if(document.getElementById("ris"+element.id[3]).style.display=="block"){
        document.getElementById("ris"+element.id[3]).style.display="none";
    }else{
        document.getElementById("ris"+element.id[3]).style.display="block";
    }
}




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