<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <header>
    
  <a href="index.php"><img class="logo-place" src="assets/img/VFE-logo" alt=""></a>  
 <div class="header-position">
     <a href="boeken.php"><li>Boeken</li> </a>
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
