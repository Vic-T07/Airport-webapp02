<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
    <header>
    
    <img class="logo-place" src="assets/img/VFE-logo" alt="">
 <div class="header-position">
     <a href=""><li>Boek</li> </a>
    <a href=""><li>Service</li></a>
    <a href=""><li>Inchecken</li></a>
</div>
    <img class="nl-place" src="assets/img/NL-vlag" alt="">
   <div class="inlog-button"><a href=""><li>Mijn VFE</li></a></div> 

    </header>
</body>
</html>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("header");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
