<?php require('konekcija\data.php');
  if(isset($_SESSION['korisnik_sesija'])) { echo '<script>window.location="panel/panel.php</script>'; return true; } ?>
<?php require('header-signup.php'); ?>


  <!-- Signup Section  -->

  <div class="login">
  <h1>Registrujte se</h1> 
  <input type="text" placeholder="Username" id="username">  
  <input type="password" placeholder="Šifra" id="password">
  <input type="text" placeholder="Email" id="email"> 
  <input type="submit" value="Registrujte se">
</div>
<div class="shadow"></div>



  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Kontakt <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+1 234 123 1234</h2>
            <h2>+1 234 123 1234</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>info@delux.ba</h2>
            <h2></h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Adresa</h1>
            <h2>Kovači BB, Živinice 75270</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

 <?php
    include_once 'footer.php';
 ?>