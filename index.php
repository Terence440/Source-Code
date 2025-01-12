<?php

session_start();

if (!isset($_SESSION['unique_id'])) {
  header("Location: Log_In/loginPage.php");
}

include_once "assets/php/config.php";
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
if (mysqli_num_rows($sql) > 0) {
  $user_data = mysqli_fetch_assoc($sql);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="assets/resources//icon.png">

  <title>Home</title>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="assets\css\swiper-bundle.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/header.css">
  <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
  <link rel="stylesheet" type="text/css" href="assets/css/home.css">
  <link rel="stylesheet" type="text/css" href="assets/css/function.css">
  <link rel="stylesheet" type="text/css" href="assets/css/meetUs-V3.css">

  <script src="https://kit.fontawesome.com/47b68a28dc.js" crossorigin="anonymous"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <div id="wrapper_Header">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
        <div class="logo"></div>
        <a href="index.php">
          <img id="logo" src="assets\\resources\\logo_white.png" alt="logo">
        </a>
        <ul class="links">
          <li><a href="index.php">Home</a></li>
          <li><a href="Fun_Fact/funFact.php">Fun Fact</a></li>
          <li><a href="Forum/forum.php">Forum</a></li>
          <li><a href="Quiz/quiz1.php">Quiz</a></li>
          <li><a href="Contact_Us/contact_us.php">Contact Us</a></li>
        </ul>
      </div>
      <?php if ($user_data['user_name'] != null) : ?>
        <div class="dropdown_btnUser">
          <a href="ChatSystem/chat.php"><i class='fas fa-comment'></i></a>
          <?php echo "<font>" . $user_data['user_name'] . "</font>"; ?>
          <button class="dropbtn_UserArrow" onclick="myFunction()">
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content_btnUser" id="myDropdown_btnUser">
            <a href="assets/php/logout.php?logout_id=<?php echo $user_data['unique_id'] ?>">Log Out</a>
            <!-- Log out not functioning -->
          </div>
        </div>
      <?php else : ?>
        <a class="cta" href="Log_In/loginPage.php"><button id="btn_SignIn">Sign In</button></a>
      <?php endif; ?>
    </nav>
  </div>
  <!-- ======= Header ======= -->

  <!-- ======= Content ======= -->
  <section id="content_Home">
    <div class="container_Home">
      <div class="row_Home" style="justify-content: center;">
        <h1>Welcome, <?php echo $user_data['user_name']; ?></h1>
        <img class="play_and_learn" src="assets/resources/play_and_learn.jpg" alt="play_and_learn">
      </div>
    </div>

    <!-- Functions -->
    <section id="Functions">
      <div class="slide-container swiper">
        <h1>Functions</h1>
        <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">

            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="assets/resources/forum.jpg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Forum</h2>
                <p class="description">This is a student space for the students to have discussion among each other.</p>

                <a href="Forum/forum.php">
                  <button class="button">View More</button>
                </a>

              </div>
            </div>

            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="assets/resources/fun_fact_function.jpg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Fun Fact</h2>
                <p class="description">Stop right there! You're about to learn some seriously interesting facts about science,
                  history, and pop culture that will blow your mind.</p>

                <a href="Fun_Fact/funFact.php">
                  <button class="button">View More</button>
                </a>

              </div>
            </div>

            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="assets/resources/quiz_function.jpg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Quiz</h2>
                <p class="description">Use this funciton to learn anything, anywhere. You can study on your own or engage in group quizzes remotely.</p>

                <a href="Quiz/quiz1.php">
                  <button class="button">View More</button>
                </a>

              </div>
            </div>

            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="assets/resources/chat_function.jpg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Chat</h2>
                <p class="description">Having a problem? Come and connect with you friends now and have a discuss with them!</p>

                <a href="ChatSystem/chat.php">
                  <button class="button">View More</button>
                </a>

              </div>
            </div>

            <div class="card swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="assets/resources/contactUs.jpg" alt="" class="card-img">
                </div>
              </div>

              <div class="card-content">
                <h2 class="name">Contact Us</h2>
                <p class="description">Having a problem? Come and contact with us.</p>

                <a href="Contact_Us/contact_us.php">
                  <button class="button">View More</button>
                </a>

              </div>
            </div>

          </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <!-- Functions -->

    <!-- Meet Us -->
    <section id="Meet_Us">
      <div class="container_MeetUs">
        <h1>Meet Us</h1>
        <input type="radio" name="dot_MeetUs" id="one">
        <input type="radio" name="dot_MeetUs" id="two">
        <div class="main-card_MeetUs">
          <div class="cards_MeetUs">

            <div class="card_MeetUs">
              <div class="content_MeetUs">
                <div class="img_MeetUs">
                  <img src="assets/resources/zhanyi.jpeg" alt="">
                </div>
                <div class="details_MeetUs">
                  <div class="name_deatilsMeetUs">Boo Zhan Yi</div>
                  <!-- <div class="job_deatilsMeetUs">Web Designer</div> -->
                </div>
                <div class="media-icons_MeetUs">
                  <a href="https://www.facebook.com/zhanyi.boo"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.instagram.com/psbsosbsob/"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
              </div>
            </div>

            <div class="card_MeetUs">
              <div class="content_MeetUs">
                <div class="img_MeetUs">
                  <img src="assets/resources/junyi.jpg" alt="">
                </div>
                <div class="details_MeetUs">
                  <div class="name_deatilsMeetUs">Chong Jun Yi</div>
                  <!-- <div class="job_deatilsMeetUs">Web Designer</div> -->
                </div>
                <div class="media-icons_MeetUs">
                  <a href="https://www.facebook.com/profile.php?id=100013205131188"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.instagram.com/donaldchong666/"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
              </div>
            </div>
            <div class="card_MeetUs">
              <div class="content_MeetUs">
                <div class="img_MeetUs">
                  <img src="assets/resources/desmond.jpeg" alt="">
                </div>
                <div class="details_MeetUs">
                  <div class="name_deatilsMeetUs">Desmond Tee Yu Wei</div>
                  <!-- <div class="job_deatilsMeetUs">Web Designer</div> -->
                </div>
                <div class="media-icons_MeetUs">
                  <a href="https://www.facebook.com/desmond.tee.94"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.instagram.com/rynn_desmond/"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="cards_MeetUs">
            <div class="card_MeetUs">
              <div class="content_MeetUs">
                <div class="img_MeetUs">
                  <img src="assets/resources/yh.JPG" alt="">
                </div>
                <div class="details_MeetUs">
                  <div class="name_deatilsMeetUs">Gan Yu Hong</div>
                  <!-- <div class="job_deatilsMeetUs">Web Designer</div> -->
                </div>
                <div class="media-icons_MeetUs">
                  <a href="https://www.facebook.com/terence.gan.01/"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.instagram.com/terencegan.yh/"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
              </div>
            </div>
            <div class="card_MeetUs">
              <div class="content_MeetUs">
                <div class="img_MeetUs">
                  <img src="assets/resources/yongping.jpg" alt="">
                </div>
                <div class="details_MeetUs">
                  <div class="name_deatilsMeetUs">Yaap Yong Ping</div>
                  <!-- <div class="job_deatilsMeetUs">Web Designer</div> -->
                </div>
                <div class="media-icons_MeetUs">
                  <a href="https://www.facebook.com/yongping.yaap"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.instagram.com/ypypyypxd/"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="button_MeetUs">
          <label for="one" class="one active"></label>
          <label for="two" class="two"></label>
        </div>
      </div>
    </section>
    <!-- Meet Us -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container_footer">
        <div class="row_footer">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="#">privacy policy</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Links</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="Fun_Fact/funFact.php">Fun Fact</a></li>
              <li><a href="Forum/forum.php">Forum</a></li>
              <li><a href="Quiz/quiz1.php">Quiz</a></li>
              <li><a href="Contact_Us/contact_us.php">Contact Us</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Contact Us</h4>
            <ul>
              <li><i class="fa-solid fa-location-dot"></i>Faculty of Computer Science and Information
                Technology, Universiti
                Malaya</li>
              <li><i class="fa-solid fa-envelope"></i>play_and_learn@gmail.com</li>
              <li><i class="fa-solid fa-phone"></i>+60 153541764</li>

            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>

      </div>
      <p class="copyright">Copyright © 2022. All Right Reserved</p>
    </footer>
    <!-- ======= Footer ======= -->

  </section>

</body>

<script type="text/javascript">
  window.addEventListener("scroll", function() {
    var header = document.getElementById("wrapper_Header");
    header.classList.toggle("sticky", window.scrollY > 0);

    if (window.scrollY == 0) {
      document.getElementById("logo").src = "assets\\resources\\logo_white.png";
    } else {
      document.getElementById("logo").src = "assets\\resources\\logo_black.png";
    }
  })
</script>

<!-- Swiper JS -->
<script src="assets\javascript\swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".slide-content", {
    slidesPerView: 4,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      520: {
        slidesPerView: 2,
      },
      950: {
        slidesPerView: 3,
      },
      1350: {
        slidesPerView: 4,
      }
    },
  });
</script>

<script>
  function myFunction() {
    document.getElementById("myDropdown_btnUser").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn_UserArrow')) {
      var myDropdown = document.getElementsByClassName("dropbtn_UserArrow");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
    }
  }
</script>

</html>