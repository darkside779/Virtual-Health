<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="shortcut icon" href="images/Home-logo2.jpg">
  <title>Virtual Health</title>
</head>

<?php include("include/header.php");?>
      <!-- عشان يفتح لينا الرساله JavaScript عرفنا الزر في  -->
    </nav>
    <header class="header">
      <div class="content">
        <h1><span>Welcome to</span><br />Virtual Health</h1>
        <p>
          Your gateway to convenient and accessible healthcare. Connect with doctors, schedule appointments, and manage
          your health from the comfort of your home.
        </p>
        <button class="btn"
          onclick="document.getElementById('services-section').scrollIntoView({ behavior: 'smooth' });">
          Get Services
        </button>
      </div>
      <div class="image">
        <span class="image__bg"></span>
        <img src="images/header-bg.png" alt="header image" />
        <div class="image_content imagecontent_1">
          <span><i class="ri-user-3-line"></i></span>
          <div class="details">
            <h4>1520+</h4>
            <p>Active Clients</p>
          </div>
        </div>
        <div class="image_content imagecontent_2">
          <ul>
            <li>
              <span><i class="ri-check-line"></i></span>
              Speed in response
            </li>
            <li>
              <span><i class="ri-check-line"></i></span>
              Expert Doctors
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!--About Us page-->
    <section id="about-section">
      <div class="about-container">
        <!-- Text on the left side -->
        <div class="about-left">
          <h3>About Us</h3>
          <p>
          <h4>At Virtual Health</h4>
          We are committed to revolutionizing the way healthcare is delivered. Our mission is to make quality healthcare
          accessible to everyone, regardless of their location. By leveraging cutting-edge technology, we connect
          patients with healthcare professionals from the comfort of their homes.<br>
          We believe that healthcare should be convenient, efficient, and personal. Our platform provides a seamless
          experience, allowing patients to schedule appointments, consult with doctors, and manage their health records
          all in one place. Whether you're in a remote area or a bustling city, Virtual Health ensures that you receive
          the care you need when you need it.
          </p>
          <video src="images/med video.mp4" controls></video>
        </div>
        <!-- Bullet points on the right side below the video -->
        <!-- Picture and Bullet points on the right side -->
        <div class="about-right">
          <img src="images/about us next.jpg" alt="About Us Picture" class="about-picture" />


          <div class="about-right">
            <ul>
              <li>
                <i class="fas fa-user-md"></i>
                <i class="fa-solid fa-vial-circle-check"></i>
                <div>
                  <h5>key features </h5>
                  <p>Streamlined Healthcare Access: Connect with qualified medical professionals efficiently, enhancing
                    your overall health experience</p>
                </div>
              </li>
              <li>
                <i class="fas fa-book-medical"></i>
                <div>
                  <p>Integrated Health Management: Keep track of your health records and appointments all in one place
                    with our easy-to-use platform</p>
                </div>
              </li>
              <li>
                <i class="fas fa-calendar-alt"></i>
                <div>
                  <p> Flexible Appointment Scheduling: Book, modify, or cancel consultations with ease, ensuring your
                    healthcare needs are met on your schedule.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
    </section>

    <!-- CSS -->
    <style>
      /* About Section */
      .about-container {
        display: flex;
        justify-content: space-between;
        gap: 50px;
        /* Adjust the space between the left and right sections */
      }

      .about-left {
        flex: 1;
      }

      .about-left video {
        width: 100%;
        height: auto;
        margin-top: 20px;
        /* Space between the text and the video */
      }

      .about-right {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
      }

      .about-right ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .about-right ul li {
        display: flex;
        align-items: flex-start;
        margin-top: 40px;
      }

      .about-right .about-picture {
        width: 100%;
        height: auto;
        margin-bottom: 20px;
        /* Space between the picture and key features */
      }

      .about-right ul i {
        flex-shrink: 0;
        font-size: 48px;
        color: var(--accent-color);
        margin-right: 20px;
      }

      .about-right ul h5 {
        font-size: 18px;
        font-weight: 700;
      }

      .about-right ul p {
        font-size: 15px;
      }
    </style>

    <!-- Medicines Slider Section -->
    <section id="medicines-slider-section">
      <h2>Medicines we provide:</h2>
      <div class="medicines-slider">
        <ul>
          <li><span>Aspirin</span></li>
          <li><span>Tylenol </span></li>
          <li><span>Ibuprofen</span></li>
          <li><span>Amoxicillin</span></li>
          <li><span>Metformin</span></li>
          <li><span>Levothyroxine</span></li>
          <li><span>Hydrochlorothiazide</span></li>
          <li><span>Simvastatin</span></li>
          <li><span>Lisinopril</span></li>
          <li><span>Omeprazole</span></li>
        </ul>
      </div>
    </section>


    <style>
      /* Medicines Slider Section */
      #medicines-slider-section {
        padding: 40px 0;
        background-color: #f9f9f9;
        text-align: center;
      }

      #medicines-slider-section h2 {
        font-size: 28px;
        color: #209677;
        margin-bottom: 20px;
        font-weight: 700;
      }

      .medicines-slider {
        overflow: hidden;
        position: relative;
        height: 60px;
      }

      .medicines-slider ul {
        display: flex;
        animation: scroll 30s linear infinite;
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .medicines-slider li {
        flex: none;
        width: 200px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #91f2d8;
        margin-right: 15px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        font-size: 16px;
        font-weight: 500;
        color: #333;
      }

      @keyframes scroll {
        0% {
          transform: translateX(100%);
        }

        100% {
          transform: translateX(-100%);
        }
      }
    </style>

    <section id="doctors-section">

      <!-- doctor section -->

      <section id="doctor-section" class="doctor_section layout_padding">
        <div class="container">
          <div class="heading_container heading_center">
            <h2>
              Our Top Doctors
            </h2>
            <h3>At Virtual Health</h3>
            <p class="col-md-10 mx-auto px-0">
              We pride ourselves on having a team of highly skilled and compassionate doctors dedicated to providing
              top-notch care.<br> Each of our physicians brings a wealth of experience and expertise to their field,
              ensuring that you receive the best medical attention possible.<br> Our doctors are committed to not only
              treating but also understanding and supporting our patients through every step of their healthcare
              journey.<br> Explore their profiles to learn more about their specializations and how they can help you
              achieve your health goals.
            </p>
          </div>
          <div class="row">
            <div class="col-sm-6 col-lg-4 mx-auto">
              <div class="box">
                <div class="img-box">
                  <img src="images/d1.jpg" alt="">
                </div>
                <div class="detail-box">
                  <div class="social-links align-items-center">
                    <a href="https://twitter.com/YourTwitterUsername" class="twitter" target="_blank">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.facebook.com/YourFacebookUsername" class="facebook" target="_blank">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/YourInstagramUsername" class="instagram" target="_blank">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/YourPhoneNumber" class="whatsapp" target="_blank">
                      <i class="fab fa-whatsapp"></i>
                    </a>
                  </div>


                  <h5>
                    Sara Abdarhman
                  </h5>
                  <h6 class="">
                    Gynecologist
                  </h6>
                </div>
              </div>
            </div>


            <div class="col-sm-6 col-lg-4 mx-auto">
              <div class="box">
                <div class="img-box">
                  <img src="images/d2.jpg" alt="">
                </div>
                <div class="detail-box">
                  <div class="social-links align-items-center">
                    <a href="https://twitter.com/YourTwitterUsername" class="twitter" target="_blank">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.facebook.com/YourFacebookUsername" class="facebook" target="_blank">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/YourInstagramUsername" class="instagram" target="_blank">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/YourPhoneNumber" class="whatsapp" target="_blank">
                      <i class="fab fa-whatsapp"></i>
                    </a>
                  </div>

                  <h5>
                    Mohammed Ahmed
                  </h5>
                  <h6>
                    Internal Medicine Doctor
                  </h6>
                </div>
              </div>
            </div>





            <div class="col-sm-6 col-lg-4 mx-auto">
              <div class="box">
                <div class="img-box">
                  <img src="images/d3.jpg" alt="">
                </div>
                <div class="detail-box">
                  <div class="social-links align-items-center">
                    <a href="https://twitter.com/YourTwitterUsername" class="twitter" target="_blank">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.facebook.com/YourFacebookUsername" class="facebook" target="_blank">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/YourInstagramUsername" class="instagram" target="_blank">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/YourPhoneNumber" class="whatsapp" target="_blank">
                      <i class="fab fa-whatsapp"></i>
                    </a>
                  </div>
                  <h5>Rowan Nasser</h5>
                  <h6 class="">Dentist</h6>
                </div>
              </div>
            </div>


            <div class="col-sm-6 col-lg-4 mx-auto">
              <div class="box">
                <div class="img-box">
                  <img src="images/d5.jpg" alt="">
                </div>
                <div class="detail-box">
                  <div class="social-links align-items-center">
                    <a href="https://twitter.com/YourTwitterUsername" class="twitter" target="_blank">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.facebook.com/YourFacebookUsername" class="facebook" target="_blank">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/YourInstagramUsername" class="instagram" target="_blank">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/YourPhoneNumber" class="whatsapp" target="_blank">
                      <i class="fab fa-whatsapp"></i>
                    </a>
                  </div>
                  <h5>Ahmed Ali</h5>
                  <h6 class="">Pediatrician</h6>
                </div>
              </div>
            </div>


            <div class="col-sm-6 col-lg-4 mx-auto">
              <div class="box">
                <div class="img-box">
                  <img src="images/d4.jpg" alt="">
                </div>
                <div class="detail-box">
                  <div class="social-links align-items-center">
                    <a href="https://twitter.com/YourTwitterUsername" class="twitter" target="_blank">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.facebook.com/YourFacebookUsername" class="facebook" target="_blank">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/YourInstagramUsername" class="instagram" target="_blank">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/YourPhoneNumber" class="whatsapp" target="_blank">
                      <i class="fab fa-whatsapp"></i>
                    </a>
                  </div>
                  <h5>Ola Mohammed</h5>
                  <h6 class="">Psychiatrist</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="doctors.html" class="btn btn-vew-all" target="_blank">
            View All
          </a>
        </div>
  </div>

  </section>


  <style>
    /* General Section Styling */
    .doctor_section {
      padding: 60px 0;
      background-color: #f9f9f9;
    }

    .heading_container h2 {
      font-size: 36px;
      color: #209677;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .heading_container p {
      font-size: 16px;
      color: black;
      margin-bottom: 40px;
      line-height: 1.8;
    }

    /* Doctor Section Styling */
    .doctor_section {
      padding: 60px 0;
      background-color: #e6fff9;
    }

    .heading_container h2 {
      font-size: 36px;
      color: #209677;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .heading_container p {
      font-size: 16px;
      color: black;
      margin-bottom: 40px;
      line-height: 1.8;
    }

    /* Doctor Box Styling */
    .doctor_section .box {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      padding: 20px;
      margin-bottom: 30px;
      transition: all 0.3s ease-in-out;
      flex: 1;
      margin-right: 10px;
      /* Space between boxes */
    }

    .doctor_section .box:last-child {
      margin-right: 0;
      /* Remove margin from the last box */
    }

    .doctor_section .box:hover {
      transform: translateY(-10px);
    }

    .doctor_section .img-box {
      margin-bottom: 20px;
    }

    .doctor_section .img-box img {
      width: 100%;
      border-radius: 50%;
      max-width: 150px;
      border: 4px solid #f1f1f1;
    }

    .doctor_section .detail-box h5 {
      font-size: 20px;
      font-weight: 600;
      color: #333;
      margin-bottom: 5px;
    }

    .doctor_section .detail-box h6 {
      font-size: 16px;
      color: #777;
      font-weight: 500;
    }

    /* Social Icons Styling */
    .doctor_section .social_box {
      margin: 15px 0;
    }

    .doctor_section .social_box a {
      color: #333;
      font-size: 20px;
      margin: 0 10px;
      transition: color 0.3s ease;
    }

    .doctor_section .social_box a:hover {
      color: #209677;
    }

    /* Button Styling */
    .doctor_section .btn-box {
      text-align: center;
      margin-top: 30px;
    }

    .doctor_section .btn-box a {
      background: #209677;
      color: #fff;
      padding: 10px 20px;
      border-radius: 25px;
      text-decoration: none;
      transition: background 0.3s ease;
    }

    .doctor_section .btn-box a:hover {
      background: #003c2c;
    }

    /* Arrange doctors in a single row */
    .doctor_section .row {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    @media (max-width: 768px) {
      .doctor_section .box {
        margin-right: 0;
        margin-bottom: 20px;
        flex: 1 0 45%;
        /* Two boxes per row on medium screens */
      }
    }

    @media (max-width: 576px) {
      .doctor_section .heading_container h2 {
        font-size: 28px;
      }

      .doctor_section .heading_container p {
        font-size: 14px;
      }

      .doctor_section .box {
        flex: 1 0 100%;
        /* One box per row on small screens */
      }
    }

    /* Social Icons Styling */
    .social-links {
      margin: 15px 0;
    }

    .social-links a {
      color: #209677;
      font-size: 20px;
      margin: 0 10px;
      transition: color 0.3s ease;
    }

    .social-links a:hover {
      color: #06ee1d;
    }
  </style>
  <!-- end doctor section -->



  <!--about services button-->
  <!-- services section -->
  <div id="services-section">
    <div class="about-left">
      <section id="services" class="services py">
        <div class="container">
          <h5 class="text-center">Services</h5>
          <div class="section-head text-center">
            <h2 class="lead">The Best Doctor gives the least medicines</h2>


          </div>
          <div class="services-inner text-center grid">
            <article class="service-item">
              <div class="icon">
                <img src="images/service-icon-1.jpg">
              </div>
              <h3>Top Doctors</h3>
              <p class="text text-sm">We offer a team of top specialists in various fields, always ready to provide
                optimal healthcare. Our doctors are here to diagnose and treat a wide range of health conditions with a
                focus on comprehensive and professional care.</p><br><br>
              <div class="text-center">
                <a href="doctors.html" class="btn btn-vew-all" target="_blank">
                  View All
                </a>
              </div>
            </article>

            <article class="service-item">
              <div class="icon">
                <img src="images/service-icon-3.jpg">
              </div>
              <h3>Ongoing Support and Follow-Up</h3>
              <p class="text text-sm">We guarantee ongoing support and follow-up throughout your treatment to ensure the
                best results. Receive continuous assistance and comprehensive monitoring to ensure your progress and
                recovery, with advice and help available as needed.</p>
            </article>

            <article class="service-item">
              <div class="icon">
                <img src="images/service-icon-2.jpg">
              </div>
              <h3>Remote Diagnosis</h3>
              <p class="text text-sm">We offer a remote diagnosis service that allows you to receive an accurate medical
                evaluation based on your health complaint. After submitting details of your condition through our online
                platform, our team of specialized doctors reviews the complaint and analyzes the provided symptoms.
                Using this information, doctors can provide a comprehensive assessment and appropriate treatment
                recommendations, offering you medical care without the need for an in-person visit.</p>
            </article>

            <article class="service-item">
              <div class="icon">
                <img src="images/service-icon-4.png">
              </div>
              <h3>AI Chat</h3>
              <p class="text text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis possimus
                doloribus facilis velit, assumenda tempora quas mollitia quos voluptatibus consequatur!</p>
            </article>
          </div>
        </div>
      </section>
      <!-- end of services section -->
    </div>
  </div>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    /* تنسيق القسم الكامل */
    #services-section {
      padding: 60px 0;
      background-color: #c3ffef;
    }


    .container h5.text-center {
      text-align: center;
      font-size: 36px;
      color: #209677;
      font-weight: 700;
      margin-bottom: 20px;
    }


    .services {
      padding: 60px 20px;
    }

    .section-head {
      margin-bottom: 40px;
    }

    .section-head .lead {
      font-size: 36px;
      color: #0a7659;
      margin-bottom: 10px;
    }

    .section-head .text {
      font-size: 18px;
      color: #434242;
    }

    .line-art {
      margin: 20px 0;
      align-items: center;
    }

    .line-art div {
      flex: 1;
      height: 2px;
      background-color: #434242;
    }

    .line-art img {
      margin: 0 10px;
    }

    /* تنسيق العناصر داخل قسم الخدمات */
    .services-inner {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .service-item {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0px 2px 10px rgba(142, 19, 19, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }


    .service-item:hover {
      transform: translateY(-10px);
      box-shadow: 0px 4px 20px rgba(44, 183, 100, 0.2);
    }


    .service-item .icon {
      margin-bottom: 20px;
    }

    .service-item .icon img {
      width: 64px;
      height: 64px;
    }

    .service-item h3 {
      font-size: 24px;
      color: #434242;
      margin-bottom: 10px;
    }

    .service-item .text {
      font-size: 16px;
      color: #434242;
    }

    /* تنسيق لعرض الأجهزة المحمولة */
    @media (max-width: 768px) {
      .section-head .lead {
        font-size: 28px;
      }

      .section-head .text {
        font-size: 16px;
      }

      .services-inner {
        grid-template-columns: 1fr;
      }
    }

    /* تنسيق للأزرار */
    .btn {
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      color: #fff;
      background-color: #209677;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #0a7659;
    }

    .btn-appointment {
      background-color: #ff6f61;
    }

    .btn-appointment:hover {
      background-color: #e55d50;
    }

    /* إضافة مسافة بين الأزرار وصناديق الخدمة */
    .mt-4 {
      margin-top: 40px;
    }
  </style>

  <!--about contact button-->
  <!-- contact section -->
  <section id="contact-section">
    <div class="container">
      <span class="big-circle"></span>
      <img src="images/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Have any questions or concerns? We're always ready to help! Contact us through the form or connect with us
            on social media.
          </p>

          <div class="info">
            <div class="information">
              <img src="images/location.png" class="icon" alt="" />
              <p>92 Cherry Drive Uniondale, NY 11553</p>
            </div>
            <div class="information">
              <img src="images/email.png" class="icon" alt="" />
              <p>support@virtualhealth.com</p>
            </div>
            <div class="information">
              <img src="images/phone.png" class="icon" alt="" />
              <p>+1 123-456-789</p>
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

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Name</label>
              <span>Name</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>
  </section>


  <style>
    /* Contact Us Section */
    #contact-section {
      padding: 60px 0;
      background-color: #c3ffef;
      position: relative;
      overflow: hidden;
    }

    #contact-section .container {
      position: relative;
      z-index: 1;
    }

    #contact-section .title {
      font-size: 36px;
      color: #209677;
      font-weight: 700;
      margin-bottom: 20px;
    }

    #contact-section .text {
      font-size: 18px;
      color: #555;
      margin-bottom: 40px;
      line-height: 1.8;
    }

    #contact-section .form {
      display: flex;
      gap: 50px;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    #contact-section .contact-info {
      flex: 1;
    }

    #contact-section .contact-info .info {
      margin-bottom: 20px;
    }

    #contact-section .contact-info .information {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    #contact-section .contact-info .icon {
      margin-right: 15px;
      max-width: 30px;
      max-height: 30px;
      object-fit: contain;
    }

    #contact-section .contact-info .social-icons a {
      color: #209677;
      font-size: 24px;
      margin-right: 20px;
      transition: color 0.3s ease;
    }

    #contact-section .contact-info .social-icons a:hover {
      color: #0a7659;
    }

    #contact-section .contact-form {
      flex: 1;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    #contact-section .contact-form .input-container {
      position: relative;
      margin-bottom: 30px;
    }

    #contact-section .contact-form .input-container input,
    #contact-section .contact-form .input-container textarea {
      width: 100%;
      padding: 15px;
      border: 2px solid #209677;
      border-radius: 5px;
      outline: none;
      font-size: 16px;
      color: #333;
    }

    #contact-section .contact-form .input-container label {
      position: absolute;
      top: 15px;
      left: 15px;
      background-color: #fff;
      padding: 0 5px;
      font-size: 16px;
      color: #555;
      pointer-events: none;
      transition: 0.3s;
    }

    #contact-section .contact-form .input-container input:focus+label,
    #contact-section .contact-form .input-container input:not(:placeholder-shown)+label,
    #contact-section .contact-form .input-container textarea:focus+label,
    #contact-section .contact-form .input-container textarea:not(:placeholder-shown)+label {
      top: -10px;
      left: 10px;
      font-size: 14px;
      color: #209677;
    }

    #contact-section .contact-form .input-container textarea {
      height: 150px;
      resize: none;
    }

    #contact-section .contact-form .btn {
      width: 100%;
      background-color: #209677;
      padding: 15px;
      border-radius: 5px;
      font-size: 18px;
      color: #fff;
      transition: background-color 0.3s ease;
      border: none;
    }

    #contact-section .contact-form .btn:hover {
      background-color: #0a7659;
    }

    #contact-section .circle {
      position: absolute;
      border-radius: 50%;
      background-color: rgba(44, 183, 100, 0.1);
    }

    #contact-section .circle.one {
      width: 300px;
      height: 300px;
      top: 50px;
      left: -150px;
    }

    #contact-section .circle.two {
      width: 200px;
      height: 200px;
      bottom: 50px;
      right: -100px;
    }

    #contact-section .square {
      position: absolute;
      width: 100px;
      top: 200px;
      right: 0;
      z-index: -1;
    }
  </style>

  <?php include("include/footer.php");?>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

      body {
        line-height: 1.5;
        font-family: 'Poppins', sans-serif;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      .container {
        max-width: 1170px;
        margin: auto;
      }

      .row {
        display: flex;
        flex-wrap: wrap;
      }

      ul {
        list-style: none;
      }

      .footer {
        background-color: #24262b;
        padding: 70px 0;
      }

      .footer-col {
        width: 25%;
        padding: 0 15px;
      }

      .footer-col h4 {
        font-size: 18px;
        color: #ffffff;
        text-transform: capitalize;
        margin-bottom: 35px;
        font-weight: 500;
        position: relative;
      }

      .footer-col h4::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        background-color: #e91e63;
        height: 2px;
        box-sizing: border-box;
        width: 50px;
      }

      .footer-col ul li:not(:last-child) {
        margin-bottom: 10px;
      }

      .footer-col ul li a {
        font-size: 16px;
        text-transform: capitalize;
        color: #ffffff;
        text-decoration: none;
        font-weight: 300;
        color: #bbbbbb;
        display: block;
        transition: all 0.3s ease;
      }

      .footer-col ul li a:hover {
        color: #ffffff;
        padding-left: 8px;
      }

      .footer-col .social-links a {
        display: inline-block;
        height: 40px;
        width: 40px;
        background-color: rgba(255, 255, 255, 0.2);
        margin: 0 10px 10px 0;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        color: #ffffff;
        transition: all 0.5s ease;
      }

      .footer-col .social-links a:hover {
        color: #24262b;
        background-color: #ffffff;
      }

      /*responsive*/
      @media(max-width: 767px) {
        .footer-col {
          width: 50%;
          margin-bottom: 30px;
        }
      }

      @media(max-width: 574px) {
        .footer-col {
          width: 100%;
        }
      }
    </style>



  </div>
</body>

</html>
