<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="assets/resources//icon.png">

    <title>Play & Learn</title>
    <link rel="stylesheet" href="assets/css/quiz.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
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
          <li><a href="funFact.html">Fun Fact</a></li>
          <li><a href="forum.html">Forum</a></li>
          <li><a href="quiz.html">Quiz</a></li>
          <li><a href="contact_us.html">Contact Us</a></li>
        </ul>
      </div>
      <a class="cta" href="loginPage.php"><button id="btn_SignIn">Sign In</button></a>
      <a class="cta" href="logout.php"><button id="btn_SignIn">Log Out</button></a>
      <a class="cta" href="ChatSystem/chat.php"><button id="btn_SignIn">Chat</button></a>
    </nav>
  </div>
  <!-- ======= Header ======= -->


    <!-- ======= Slideshow ======= -->
    <div class="slideshow">
        <div class="mySlides fade">
            <p><img src="assets/resources/quiz.jpg" class="img-fluid image" alt=""></p>
            <h1>Are you ready for the Quiz</h1>
            <h2>“By the time the average person finishes college, he or she will have taken over 2,600 tests,
                quizzes, and exams. The right answer approach becomes deeply ingrained in our thinking.
                This may be fine for some mathematical problems where there is in fact only one right answer.
                The difficulty is that most of life isn’t this way. Life is ambiguous; there are many right answers-
                all depending on what you’re looking for. But if you think there is only one right answer, then you’ll
                stop
                looking as soon as you find one.” ~ Roger von Oech</h2>
            <p><a href="#quiz" class="btn-get-started">Lets Started</a></p>
        </div>

        <div class="mySlides fade">
            <p><img src="assets/resources/quiz2.jpg" class="img-fluid image" alt=""></p>
            <h1>Are you ready for the Quiz</h1>
            <h2>“My friend said to me, You know what I like? Mashed potatoes. I was like, Dude, you
                have to give me time to guess. If you’re going to quiz me you have to insert a pause.” ~
                Mitch Hedberg</h2>
            <p><a href="#quiz" class="btn-get-started">Lets Started</a></p>
        </div>

        <div class="mySlides fade">
            <p><img src="assets/resources/quiz3.jpg" class="img-fluid image" alt=""></p>
            <h1>Are you ready for the Quiz</h1>
            <h2>“Thou shalt not answer questionnaires Or quizzes upon world affairs, Nor with compliance
                Take any test. Thou shalt not sit with statisticians nor commit A social science.” ~
                W. H. Auden</h2>
            <p><a href="#quiz" class="btn-get-started">Lets Started</a></p>
        </div>
        <br />

        <div style="text-align: center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>

    <div id="quiz" >
        <div class="content" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="button"><img src="assets/resources/subject1.png" class="image" alt=""></a>
            <a href="#" class="button"><img src="assets/resources/subject2.png" class="image" alt=""></a>
            <a href="#" class="button"><img src="assets/resources/subject3.png" class="image" alt=""></a>
            <a href="#" class="button"><img src="assets/resources/subject4.png" class="image" alt=""></a>
            <a href="#" class="button"><img src="assets/resources/subject5.png" class="image" alt=""></a>
            <a href="#" class="button"><img src="assets/resources/subject6.png" class="image" alt=""></a>
            <a href="#" class="button"><img src="assets/resources/subject7.png" class="image" alt=""></a>
            <a href="#" class="button"><img src="assets/resources/subject8.png" class="image" alt=""></a>
        </div>
    </div>

    <div class="modal-bg">
        <div class="modal-content">
            <div class="close">+</div>
            <h1>Select a Chapter to Start</h1>
            <a href="quiz.php"><img src="assets/resources/chapter1.png" class="image" alt=""></a>
            <a href="quiz.php"><img src="assets/resources/chapter2.png" class="image" alt=""></a>
            <a href="quiz.php"><img src="assets/resources/chapter3.png" class="image" alt=""></a>
            <a href="quiz.php"><img src="assets/resources/chapter4.png" class="image" alt=""></a>
            <a href="quiz.php"><img src="assets/resources/chapter5.png" class="image" alt=""></a>
            <a href="quiz.php"><img src="assets/resources/chapter6.png" class="image" alt=""></a>
            <a href="quiz.php"><img src="assets/resources/chapter7.png" class="image" alt=""></a>
            <a href="quiz.php"><img src="assets/resources/chapter8.png" class="image" alt=""></a>
        </div>
    </div>

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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Fun Fact</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Quiz</a></li>
                        <li><a href="#">About Us</a></li>
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
        <p class="copyright">Copyright © 2021. All Right Reserved</p>
    </footer>
    <!-- ======= Footer ======= -->
</body>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="assets/javascript/quiz.js"></script>

<script type="text/javascript">
    window.addEventListener("scroll", function () {
        var header = document.getElementById("wrapper_Header");
        header.classList.toggle("sticky", window.scrollY > 0);

        if (window.scrollY == 0) {
            document.getElementById("logo").src = "assets\\resources\\logo_white.png";
        } else {
            document.getElementById("logo").src = "assets\\resources\\logo_black.png";
        }
    })
</script>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace("active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 5 seconds
    }
</script>

</html>