<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>VFE Airways Service</title>
</head>
<?php include ('header.php'); ?>
<body>
    <div class="service-top">
        <h1>Hoe kunnen wij helpen?</h1>
    </div>
    <div class="service-bottom">
        <div class="service-vragen">
            <div class="service-inchecken"> 
                <div class="service">
                    <h2>Inchecken</h2>
                    <button id="pijl-inchecken"><img src="assets/img/pijl-rechts.png" alt=""></button>
                </div>
                <p id="inchecken-tekst" class="hidden">
                Je kunt online inchecken op je telefoon, tablet en computer. Dit kan vanaf 30 uur tot 4 of 1 uur voor vertrek. Je ontvangt dan een e-mail en kunt direct via de link in deze e-mail inchecken. Na het inchecken kun je je boardingpass downloaden op je mobiele telefoon of printen.
                </p>   
                <div class="service-lijn"></div>          
            </div>

            <div class="service-annuleren">
                <div class="service">
                    <h2>Vlucht annuleren</h2>
                    <button id="pijl-annuleren"><img src="assets/img/pijl-rechts.png" alt=""></button>
                </div>
                <p id="annuleren-tekst" class="hidden">
                Je volledige boeking annuleer je gemakkelijk via Mijn VFE. Onderaan de pagina klik je op de button 'boeking annuleren'. De boeker ontvangt een e-mail waarin de annulering moet worden bevestigd. Let op! Als je de boeking annuleert, krijg je geen geld terug.
                </p>
                <div class="service-lijn"></div> 
            </div>

            <div class="service-algemene-voorwaarden">
                <div class="service">
                    <h2>Algemene voorwaarden</h2>
                    <button id="pijl-algemene-voorwaarden"><img src="assets/img/pijl-rechts.png" alt=""></button>
                </div>
                <p id="algemene-voorwaarden-tekst" class="hidden">
                    Hier komt de tekst die je wilt tonen of verbergen.
                </p>
                <div class="service-lijn"></div> 
            </div>

            <div class="service-klachten">
                <div class="service">
                    <h2>Klachten</h2>
                    <button id="pijl-klachten"><img src="assets/img/pijl-rechts.png" alt=""></button>
                </div>
                    <p id="klachten-tekst" class="hidden">
                     Heeft u klachten over een van uw reizen, mede passagiers of medewerkers kunt u deze melden bij ons door het contact formulier in te vullen en deze naar ons op te sturen. Is het een probleem en wilt u dat het meteen opgelost word kunt u ons altijd bellen via het volgende telefoon nummer: 06 12345678
                    </p>
                    <div class="service-lijn"></div> 
                </div>
            </div>
        <div class="service-contact">
            <h2>Geen antwoord op je vraag gekregen?</h2>
            <a href="contact.php">
            <div class="service-contact-button">
                <h3>
                 Neem contact op
                </h3>
            </div>
            </a>
        </div>
    </div>
<?php
include('footer.php');
?>

</body>
</html>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const button = document.getElementById("pijl-inchecken");
    const text = document.getElementById("inchecken-tekst");
    button.addEventListener("click", function() {
        // Method 1: Make the element disappear
        // this.classList.add("hidden");
        const img = this.querySelector("img");
        img.classList.toggle("rotate-90");
        text.classList.toggle("hidden");
        // Method 2: Make the element move away
        this.classList.add("move-away");
        this.style.transform = "translateY()";
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const button = document.getElementById("pijl-annuleren");
    const text = document.getElementById("annuleren-tekst");
    button.addEventListener("click", function() {
        // Method 1: Make the element disappear
        // this.classList.add("hidden");
        const img = this.querySelector("img");
        img.classList.toggle("rotate-90");
        text.classList.toggle("hidden");
        // Method 2: Make the element move away
        this.classList.add("move-away");
        this.style.transform = "translateY()";
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const button = document.getElementById("pijl-algemene-voorwaarden");
    const text = document.getElementById("algemene-voorwaarden-tekst");
    button.addEventListener("click", function() {
        // Method 1: Make the element disappear
        // this.classList.add("hidden");
        const img = this.querySelector("img");
        img.classList.toggle("rotate-90");
        text.classList.toggle("hidden");
        // Method 2: Make the element move away
        this.classList.add("move-away");
        this.style.transform = "translateY()";
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const button = document.getElementById("pijl-klachten");
    const text = document.getElementById("klachten-tekst");
    button.addEventListener("click", function() {
        // Method 1: Make the element disappear
        // this.classList.add("hidden");
        const img = this.querySelector("img");
        img.classList.toggle("rotate-90");
        text.classList.toggle("hidden");
        // Method 2: Make the element move away
        this.classList.add("move-away");
        this.style.transform = "translateY()";
    });
});
</script>