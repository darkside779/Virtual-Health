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
  <link rel="stylesheet" href="css/about.css" />
  <link rel="stylesheet" href="css/slider.css" />
  <link rel="stylesheet" href="css/section.css" />
  <link rel="stylesheet" href="css/footer.css" />
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
  
  <?php include("include/footer.php");?>

    <style>

    </style>



  </div>
</body>

</html>
