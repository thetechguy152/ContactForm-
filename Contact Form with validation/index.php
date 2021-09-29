<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="./assets/css/style.css" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <span class="big-circle"></span>
    <img src="img/shape.png" class="square" alt="" />
    <div class="form">
      <div class="contact-info">
        <h3 class="title">Let's get in touch</h3>
        <p class="text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
          dolorum adipisci recusandae praesentium dicta!
        </p>

        <div class="info">
          <div class="information">
            <img src="./assets/images/location.png" class="icon" alt="" />
            <p>02 bloom way catalonia, NV 11553</p>
          </div>
          <div class="information">
            <img src="assets/images/email.png" class="icon" alt="" />
            <p>email@ipsum.com</p>
          </div>
          <div class="information">
            <img src="assets/images/phone.png" class="icon" alt="" />
            <p>123-456-789</p>
          </div>
        </div>

        <div class="social-media">
          <p>Connect with us :</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>

        <form action="./confirm.php" autocomplete="off" id="contactForm" method="POST">
          <h3 class="title">Contact us</h3>
          <div class="input-container">
            <input type="text" name="name" class="input" id="name" placeholder="Full name" />
            <span>Username</span>
            <div class="error" id="nameErr"></div>
          </div>
          <div class="input-container">
            <input type="email" name="email" class="input" id="email" placeholder="your Email" />
            <span>Email</span>
            <div class="error" id="emailErr"></div>
          </div>
          <div class="input-container">
            <input type="tel" name="phone" class="input" id="phone" placeholder="Mobile number" />
            <span>Phone</span>
            <div class="error" id="phoneErr"></div>
          </div>
          <div class="input-container textarea">
            <textarea name="message" class="input" id="message" placeholder="Your thoughts"></textarea>
            <span>Message</span>
            <div class="error" id="messageErr"></div>
          </div>
          <input type="submit" value="Send" class="btn" />
        </form>
      </div>
    </div>
  </div>

  <script src="./assets/js/main.js"></script>
</body>

</html>
