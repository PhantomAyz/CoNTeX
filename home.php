<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CoNTeX</title>
  <link rel="stylesheet" href="./css/page.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/3dab4ff817.js" crossorigin="anonymous"></script>
</head>

<body>
  <!----NAVBAR SECTION-->
  <nav class="navbar">
    <div class="navbar__container">
      <a href="/" id="navbar__logo">CONTEX</a>
      <div class="navbar__toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <ul class="navbar__menu">
        <li class="navbar__item">
          <a href="/" class="navbar__links">Home</a>
        </li>
        <li class="navbar__item">
          <a href="#tech" class="navbar__links">Tech</a>
        </li>
        <li class="navbar__item">
          <a href="#About_Us" class="navbar__links">About Us</a>
        </li>
        <li class="navbar__btn">
          <a href="signin.php" class="button">Log In</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="seperate">
    <!----Hero Section-->

    <div class="main">
      <div class="main__container">
        <div class="main__content">
          <h1>NEXT GENERATION</h1>
          <h2>TECHNOLOGY</h2>
          <p>See what makes us different</p>
          <button class="main__btn"><a href="log_in_page.html">Get Started</a></button>
        </div>
        <div class="main__img--container">
          <img src="images/home_pic.svg" alt="pic" id="main__img">
        </div>
      </div>
    </div>


    <div>
      <!--Services Section-->
      <div id="tech"></div>
      <br><br><br><br><br><br><br><br><br>
      <div class="services">
        <h1>See what the hype is about</h1>
        <h1>TECH UPGRADES</h1>
        <div class="services__container">
          <div class="services__card">
            <h2>Experience Bliss</h2>
            <p>Easy Writing of Mathematical Formula</p>
            <button class="sub__btn"><a href="signin.php">Get Started</a></button>
          </div>
          <div class="services__card">
            <h2>Easy Note Taking</h2>
            <p>Start Taking Notes Now</p>
            <button class="sub__btn"><a href="signin.php">Get Started</a></button>
          </div>
          <div class="services__card">
            <h2>Collaboration Feature</h2>
            <p>Invite Your Friends</p>
            <button class="sub__btn"><a href="signin.php">Get Started</a></button>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer Section -->

    <div id="About_Us" class="footer__container">
      <div class="footer__links">
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>About Us</h2>
            <a href="/">How it Works</a>
            <a href="/">Testimonials</a>
            <a href="/">Careers</a>
            <a href="/">Investments</a>
            <a href="/">Term of Services</a>
          </div>
          <div class="footer__link--items">
            <h2>Contoct Us</h2>
            <a href="/">Contact</a>
            <a href="/">Support</a>
            <a href="/">Email</a>
            <a href="/">Sponsorship</a>
          </div>
        </div>
        <div class="footer__link--wrapper">
          <div class="footer__link--items">
            <h2>Social Media</h2>
            <a href="/">Facebook</a>
            <a href="/">Twitter</a>
            <a href="/">Instagram</a>
            <a href="/">Latex</a>
          </div>
          <div class="footer__link--items">
            <h2>Contex Developers</h2>
            <a href="/">Team 5</a>
            <a href="/">Members</a>
            <a href="/">Developers</a>
          </div>
        </div>
      </div>
      <div class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <a href="/" id="footer__logo"><i class="fas fa-gem"></i>
              CONTEX
            </a>
          </div>
          <p class="website__rights">
            © CONTEX 2024. All rights reserved
          </p>
          <div class="social__icons">
            <a href="/" class="social__icon--links" target="_blank">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="/" class="social__icon--links" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="/" class="social__icon--links" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="/" class="social__icon--links" target="_blank">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="./scripts/app.js"></script>
</body>

</html>
