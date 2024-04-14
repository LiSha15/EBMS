<!DOCTYPE html>
<html lang="en">
<head>
    <style>
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
  </style>

</head>



<div class="form signup_form">
        <form action="#">
          <h2>Register Now</h2>

          <div class="input_box">
            <input type="name" placeholder="Full Name" required />
            <i class="uil uil-envelope-alt email"></i>
          </div>

          <div class="input_box">
            <input type="email" placeholder="Enter your email" required />
            <i class="uil uil-envelope-alt email"></i>
          </div>

          <div class="input_box">
            <input type="password" placeholder="Create password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>

          <div class="input_box">
            <input type="password" placeholder="Confirm password" required />
            <i class="uil uil-lock password"></i>
            <i class="uil uil-eye-slash pw_hide"></i>
          </div>

          <div class="input_box">
            <input type="contact" placeholder="Contact No." required />
            <i class="uil uil-envelope-alt email"></i>
          </div>

          <div class="input_box">
            <input type="address" placeholder="Address" required />
            <i class="uil uil-envelope-alt email"></i>
          </div>

          <button class="button">Register Now</button>

          <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
        </form>
      </div>
    </div>
  </section>

  <script src="script.js"></script>