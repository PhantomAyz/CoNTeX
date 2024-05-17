<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="./css/page.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/3dab4ff817.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

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
          <a href="index.html#tech" class="navbar__links">Tech</a>
        </li>
        <li class="navbar__item">
          <a href="index.html#About_Us" class="navbar__links">About Us</a>
        </li>
        <li class="navbar__btn">
          <a href="signin.php" class="button">Log In</a>
        </li>
      </ul>
    </div>
  </nav>


  <!--Log In Section-->

  <div class="container">
    <div class="login__content">

      <form action="" class="login__form">
        <div>
          <h1 class="login__title">
            <span>Create Account</span>
          </h1>
          <p class="login__description">
            Fill the details to sign up.
          </p>
        </div>

        <div>
          <div class="login__inputs">
            <div>
              <label for="input-email" class="login__label">First Name</label>
              <input type="email" placeholder="Enter your First Name" required class="login__input" id="input-first-name">
            </div>

            <div>
              <label for="input-email" class="login__label">Last Name</label>
              <input type="email" placeholder="Enter your Last Name" required class="login__input" id="input-last-name">
            </div>

            <div>
              <label for="input-email" class="login__label">Email</label>
              <input type="email" placeholder="Enter your email address" required class="login__input" id="input-email">
            </div>

            <div>
              <label for="input-pass" class="login__label">Password</label>

              <div class="login__box">
                <input type="password" placeholder="Enter your password" required class="login__input" id="input-pass">
                <i class="ri-eye-off-line login__eye" id="input-icon"></i>
              </div>
            </div>
          </div>


        </div>

        <div>
          <div class="login__buttons">
            <button class="login__button">Sign Up</button>
          </div>

          <div class="under__position">
            <div class="sign__up-text"><a>Already have an Account? <a href="signin.html" class="sign__up">Log In</a> here.</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>



  <script src="./scripts/app.js"></script>
</body>

</html>
