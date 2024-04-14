<?php
require_once("Includes/config.php");

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["inputPassword"];
  $confpassword = $_POST["confirmPassword"];
  $address = $_POST["address"];
  $contactNo = $_POST["contactNo"];

  $sql = "INSERT INTO user (`name`,`email`,`phone`,`pass`,`address`)
                    VALUES('$name','$email','$contactNo','$password','$address')";
  if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIKKCYiWgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIgKCYiuygmIhgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiJDKCYi7SgmIlIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiJzKCYi/SgmIqAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIgooJiKmKCYi/ygmIuAoJiIOAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIh8oJiLPKCYi/ygmIv4oJiI/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIkEoJiLrKCYi/ygmIv8oJiKMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmInAoJiL8KCYi/ygmIv8oJiL/KCYiySgmIpwoJiJzKCYiKQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIhYoJiJyKCYinCgmIsIoJiL8KCYi/ygmIv8oJiL/KCYinygmIgkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiJTKCYi/ygmIv8oJiL5KCYiaAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIeKCYi7ygmIv8oJiLjKCYiNwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIDKCYixCgmIv8oJiK+KCYiFQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKCYigigmIv8oJiKJKCYiAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKCYiPigmIvAoJiJSAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKCYiEigmIrooJiInAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIlooJiIMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAP/3AAD/7wAA/88AAP8fAAD+PwAA/D8AAPgfAAD4DwAA/j8AAPx/AAD4/wAA8f8AAPf/AADv/wAA//8AAA==" rel="icon" type="image/x-icon" />

  <title>EBILL</title>

  <!-- Bootstrap Core CSS -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="../assets/css/dash_user.css" rel="stylesheet">
  <!-- <link href="../assets/css/font-awesome.css" rel="stylesheet"> -->

  <!-- Custom Fonts -->
  <!-- <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
  <!-- FONT AWESOME CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- Unicons -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

  <style>
    body {
      overflow: auto;
      background-image: url('elec.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    a {
      text-decoration: none;
    }

    .header {
      position: fixed;
      height: 80px;
      width: 100%;
      z-index: 100;
      padding: 0 20px;
    }

    .nav {
      max-width: 1100px;
      width: 100%;
      margin: 0 auto;
    }

    .nav,
    .nav_item {
      display: flex;
      height: 100%;
      align-items: center;
      justify-content: space-between;
    }

    .nav_logo,
    .nav_link,
    .button {
      color: blue;
      font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .nav_logo {
      font-size: 40px;
      font-weight: 600;

    }

    .nav_item {
      column-gap: 25px;
    }

    .nav_link:hover {
      color: #d9d9d9;
    }

    .button {
      padding: 6px 24px;
      border: 2px solid #fff;
      background: transparent;
      border-radius: 6px;
      cursor: pointer;
    }

    .button:active {
      transform: scale(0.98);
    }

    /* Home */
    .home {
      position: relative;
      height: 100vh;
      width: 100%;
      background-size: cover;
      background-position: center;
    }

    .home::before {
      content: "";
      position: absolute;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: 100;
      opacity: 0;
      pointer-events: none;
      transition: all 0.5s ease-out;
    }

    .home.show::before {
      opacity: 1;
      pointer-events: auto;
    }

    /* From */
    .form_container {
      position: fixed;
      max-width: 320px;
      width: 100%;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(1.2);
      z-index: 101;
      background: #fff;
      padding: 25px;
      border-radius: 12px;
      box-shadow: rgba(0, 0, 0, 0.1);
      opacity: 0;
      pointer-events: none;
      transition: all 0.4s ease-out;
    }

    .home.show .form_container {
      opacity: 1;
      pointer-events: auto;
      transform: translate(-50%, -50%) scale(1);
    }

    .signup_form {
      display: none;
    }

    .form_container.active .signup_form {
      display: block;
    }

    .form_container.active .login_form {
      display: none;
    }

    .form_close {
      position: absolute;
      top: 10px;
      right: 20px;
      color: #0b0217;
      font-size: 22px;
      opacity: 0.7;
      cursor: pointer;
    }

    .form_container h2 {
      font-size: 22px;
      color: #0b0217;
      text-align: center;
    }

    .input_box {
      position: relative;
      margin-top: 30px;
      width: 100%;
      height: 40px;
    }

    .input_box input {
      height: 100%;
      width: 100%;
      border: none;
      outline: none;
      padding: 0 30px;
      color: #333;
      transition: all 0.2s ease;
      border-bottom: 1.5px solid #aaaaaa;
    }

    .input_box input:focus {
      border-color: #7d2ae8;
    }

    .input_box i {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 20px;
      color: #707070;
    }

    .input_box i.email,
    .input_box i.password {
      left: 0;
    }

    .input_box input:focus~i.email,
    .input_box input:focus~i.password {
      color: #7d2ae8;
    }

    .input_box i.pw_hide {
      right: 0;
      font-size: 18px;
      cursor: pointer;
    }

    .option_field {
      margin-top: 14px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .form_container a {
      color: #7d2ae8;
      font-size: 12px;
    }

    .form_container a:hover {
      text-decoration: underline;
    }

    .checkbox {
      display: flex;
      column-gap: 8px;
      white-space: nowrap;
    }

    .checkbox input {
      accent-color: #7d2ae8;
    }

    .checkbox label {
      font-size: 12px;
      cursor: pointer;
      user-select: none;
      color: #0b0217;
    }

    .form_container .button {
      background: #7d2ae8;
      margin-top: 30px;
      width: 100%;
      padding: 10px 0;
      border-radius: 10px;
    }

    .login_signup {
      font-size: 12px;
      text-align: center;
      margin-top: 15px;
    }


    /* CSS for Footer */
    .footer {
      background-color: #333;
      /* Background color */
      color: #fff;
      /* Text color */
      padding: 20px 0;
      /* Padding */
      text-align: center;
      /* Center-align text */
    }

    /* CSS for Visitor Counter Container */
    #visitor-counter-container {
      border: 2px solid #ffd700;
      /* Border */
      border-radius: 5px;
      /* Border radius */
      padding: 10px;
      /* Padding */
      display: inline-block;
      /* Display as inline-block to fit content */
    }

    /* CSS for Visitor Counter */
    #visitor-counter {
      font-size: 20px;
      /* Font size */
      font-weight: bold;
      /* Bold text */
      color: #ffd700;
      /* Text color */
    }

    .hero-section {
            height: 100vh;
            background-position: center;
            background-size: cover;
            display: flex;
            align-items: center;
            padding: 0 20px;
        }

        .hero-section .content {
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            color: #fff;
        }

        .hero-section .content h2 {
            font-size: 6rem;
            max-width: 500px;
            line-height: 70px;
        }

        .hero-section .content p {
            font-weight: 300;
            max-width: 600px;
            margin-top: 15px;
            font-size: 1rem;
        }

        .hero-section .content button {
            background: #fff;
            padding: 12px 30px;
            border: none;
            font-size: 1.5rem;
            border-radius: 6px;
            margin-top: 38px;
            cursor: pointer;
            font-weight: 500;
            transition: 0.2s ease;
        }

        .hero-section .content button:hover {
            color: #fff;
            background: darkblue;
        }

            .hero-section .content {
                text-align: center;
            }

            .hero-section .content :is(h2, p) {
                max-width: 100%;
                margin-bottom: 40px;
            }

            .hero-section .content h2 {
                font-size: 5rem;
                line-height: 60px;
            }

            .hero-section .content button {
                padding: 9px 18px;
            }
        
  </style>
</head>

<body>
  <!-- Header -->
  <header class="header">
    <nav class="nav">
      <a href="#" class="nav_logo">E-Bill.</a>

      <ul class="nav_items">
        <li class="nav_item">
          <a href="#" class="nav_link">Home</a>
          <a href="#" class="nav_link">About</a>
          <a href="#" class="nav_link">Contact</a>
        </li>
      </ul>

      <button class="button" id="form-open">Login</button>
    </nav>
  </header>

  <!-- Home -->
  <section class="home">
    <div class="form_container">
      <i class="uil uil-times form_close"></i>

      <!-- Login From -->
      <div class="form login_form">
        <form action="index.php" method="post">
          <h2>Login</h2>

          <div class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <div class="input_box">
                <input type="email" placeholder="Enter your email" name="email" id="email" class="form-control" required />
                <i class="uil uil-envelope-alt email"></i>
              </div>
            </div>
          </div>

          <div class="navbar-form navbar-right">
            <div class="form-group">
              <div class="input_box">
                <input type="password" placeholder="Enter your password" name="pass" id="pass" class="form-control" required />
                <i class="uil uil-lock password"></i>
                <i class="uil uil-eye-slash pw_hide"></i>

              </div>
            </div>
          </div>


          <div class="option_field">
            <span class="checkbox">
              <input type="checkbox" id="check" />
              <label for="check">Remember me</label>
            </span>
            <a href="#" class="forgot_pw">Forgot password?</a>
          </div>

          <button name=submit class="button">Login Now</button>

          <div class="login_signup">Don't have an account? <a href="#" id="signup">Register Now</a></div>
        </form>
      </div>

      <form method=POST>
        <!-- Signup From -->
        <div class="form signup_form">
          <form action="reglog.php">
            <h2>Register Now</h2>

            <div class="input_box">
              <input type="name" name="name" placeholder="Full Name" required />
              <i class="uil uil-envelope-alt email"></i>
              <!-- <label><?php echo $nameErr; ?></label> -->
            </div>

            <div class="input_box">
              <input type="email" name="email" placeholder="Enter your email" required />
              <i class="uil uil-envelope-alt email"></i>
              <!-- <label><?php echo $emailErr; ?></label> -->
            </div>

            <div class="input_box">
              <input type="password" name="inputPassword" placeholder="Create password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
              <!-- <label><?php echo $passwordErr; ?></label> -->
            </div>

            <div class="input_box">
              <input type="password" name="confirmPassword" placeholder="Confirm Password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
              <!-- <label><?php echo $confpasswordErr; ?></label><label><?php echo $confpasswordErr; ?></label> -->
            </div>

            <div class="input_box">
              <input type="tel" name="contactNo" placeholder="Contact No." required />
              <i class="uil uil-envelope-alt email"></i>
              <!-- <label><?php echo $phoneErr; ?></label> -->
            </div>

            <div class="input_box">
              <input type="address" name="address" placeholder="address" required />
              <i class="uil uil-envelope-alt email"></i>
              <!-- <label><?php echo $addrErr; ?></label> -->
            </div>

            <button type="submit" name=submit class="button">Register Now</button>

            <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
          </form>
      </form>
    </div>
    </div>
  </section>

  <section class="hero-section">
    <div class="content">
      <h2>Power Up</h2>
      <p>Empower your electricity bill management with E-Bill the electrifying solution for hassle free billing!</p>
    </div>
  </section>



  <footer class="footer">
    <div id="visitor-counter-container">
      Visitor Counter: <span id="visitor-counter">0</span>
    </div>
  </footer>


  <script src="script.js"></script>
  <script>
    // Increment visitor counter on page load
    window.onload = function() {
      // Retrieve visitor count from local storage, or set to 0 if not found
      let visitorCount = localStorage.getItem('visitorCount') || 0;
      // Increment visitor count
      visitorCount++;
      // Update visitor count in the DOM
      document.getElementById('visitor-counter').textContent = visitorCount;
      // Store updated visitor count in local storage
      localStorage.setItem('visitorCount', visitorCount);
    };
  </script>




</body>

</html>