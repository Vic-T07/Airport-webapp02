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
    <a href="service.php"><li>Service</li></a>
    <a href=""><li>Inchecken</li></a>
    <a href=""><li>Contact</li></a>

</div>
    <img class="nl-place" src="assets/img/NL-vlag" alt="">
 <div class="login-button">
   <li class="inlog-button" onclick="document.getElementById('loginModal').style.display='block'">Mijn VFE</li>
</div>
<div id="loginModal" class="modal">
    <form class="modal-content animate" action="login.php" method="post">
        <div class="img-container">
            <span onclick="document.getElementById('loginModal').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img class="avatar" src="assets/img/logo.png" alt="Avatar">
        </div>
        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <button class="" type="submit">Login</button>
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
