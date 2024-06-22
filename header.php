<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <header>
    
  <a href="index.php"><img class="logo-place" src="assets/img/Logo.png" alt=""></a>  
 <div class="header-position">
     <a href="boeken.php"><li>Boeken</li> </a>
    <a href="service.php"><li>Service</li></a>
    <a href="inchecken.php"><li>Inchecken</li></a>

</div>
    <img class="nl-place" src="assets/img/image 2.png" alt="">
 <div class="login-button">
   <li class="inlog-button" onclick="document.getElementById('loginModal').style.display='block'">Mijn VFE</li>
</div>
<div id="loginModal" class="modal">
    <form class="modal-content animate" action="inlog.php" method="post">
        <div class="img-container">
            <span onclick="document.getElementById('loginModal').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img class="avatar" src="assets/img/VFE-logo.png" alt="Avatar">
        </div>
        <div class="container">
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <button class="login-button" type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>
    </form>
</div>


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
