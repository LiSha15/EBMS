<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .footer {
  background-color: #f0f0f0;
  padding: 20px 0;
  text-align: center;
}

.content {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.contact-details {
  margin-bottom: 20px;
}

.contact-item {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.contact-item img {
  width: 30px; /* Adjust size as needed */
  height: 30px; /* Adjust size as needed */
  margin-right: 10px;
}


    /* CSS for Footer */
    .footer1 {
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
</style>
</head>

</html>

<footer class="footer">
  <div class="content">
    <div class="contact-details">
      <div class="contact-item">
        <img src="email_icon.png" alt="Email Icon">
        <p>Email: example@example.com</p>
      </div>
      <div class="contact-item">
        <img src="phone_icon.png" alt="Phone Icon">
        <p>Phone: +1234567890</p>
      </div>
      <div class="contact-item">
        <img src="address_icon.png" alt="Address Icon">
        <p>Address: 123 Main St, City, Country</p>
      </div>
    </div>
    <div class="visitor-counter">
      <p>Visitor Counter: <span id="visitor-counter">0</span></p>
    </div>
  </div>
</footer>

<footer class="footer1">
    <div id="visitor-counter-container">
      Visitor Counter: <span id="visitor-counter">0</span>
    </div>
  </footer>
