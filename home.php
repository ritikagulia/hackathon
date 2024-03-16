 <?php
  session_start();
  include("db.php");

  // Set default values
  $color = "white";
  $user = "";

  // Check if user is logged in
  if (isset($_SESSION['user_name'])) {
    $user = $_SESSION['user_name'];
    $color = "rgb(0,128,0)"; // Change color if user is logged in
  }


?> 


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
  <!-- preloader -->

  <div class="loader">
    <div class="circle" tabindex="0"></div>
    <div class="circle" tabindex="0"></div>
    <div class="circle" tabindex="0"></div>
    <div class="circle" tabindex="0"></div>
    <div class="circle" tabindex="0"></div>
  </div>

  <a id="button"><i class="fa-solid fa-arrow-up"></i></a>
  <!-- Navigation Bar -->
  <nav>
    <img src="img/Screenshot_2024-03-11_171623-removebg-preview.png" alt="logo">
    <div class="Navigation">
      <ul>
        <li> <a href="http://localhost/Hackathon/home.php">Home</a></li>
        <li> <a href="#">Blog</a></li>
        <li> <a href="#onlinecourses">Courses</a></li>
        <li> <a href="#depts">Department</a></li>
        <li> <a href="#foot">About us </a></li>
        <li>
          <?php echo "<p style='font-size:28px; color:white'>$user</p>"; ?>
        </li>
        <li><a href="http://localhost/Hackathon/popup.php"><i class="fa-solid fa-user"></i></a></li>
        <li><a href="http://localhost/Hackathon/login2.php">Logout</a></li>
      </ul>
    </div>
  </nav>
  <!-- Home  -->
  <section id="Home" data-aos="fade-up">

    <h2>
      <div class="typing-text"></div>
    </h2>
    <p>Eduhub is your study companion, offering a user-friendly platform for seamless learning experiences. With a vast
      array of resources, interactive tools, and personalized study paths, Eduhub empowers learners of all levels to
      excel. Dive into a world of knowledge with Eduhub, where education meets innovation effortlessly.</p>

    <div class="btn">
      <a class="blue" href="#foot">Learn more </a>
      <a class="yellow" href="#onlinecourses">More Courses </a>

    </div>
  </section>
  <!-- features -->
  <div id="features">
    <div class="heading1" data-aos="fade-left">
      <h1>Awesome features</h1>
      <p style="font-size: larger;">Replinesh man have things gathering lights yeilding shall you </p>
    </div>

    <div class="featurescont">
      <div class="scholarshipCont" data-aos="zoom-in">
        <i class="fa-solid fa-graduation-cap"></i>
        <h3>Scholarship Notifications</h3>
        <p>Get time to time notifications about Private and Government Scholarships</p>
      </div>
      <div class="coursesCont" data-aos="zoom-in">
        <i class="fa-solid fa-book"></i>
        <h3>Online Courses</h3>
        <p>Get a lot of free online course to upskill yourself</p>
      </div>
      <div class="blogCont" data-aos="zoom-in">
        <i class="fa-solid fa-user-nurse"></i>
        <h3>Job Openings</h3>
        <p>Get notified about the new job openings and new internships.</p>
      </div>
    </div>

  </div>

  <!-- Departments -->

  <div class="heading2" data-aos="fade-left">
    <h2>Departments</h2>
  </div>

  <div class="information" data-aos="fade-up">
    <h4>Get the Study Stuff like Previous Year Papers, College Notes etc. of following Departments</h4>
  </div>
  <div class="departments" id="depts">
    <div class="card" data-aos="zoom-in">
      <div class="first-content">
        <span>U.I.E.T. [B.C.A.]</span>
      </div>
      <div class="second-content">
        <a href="http://localhost/Hackathon/bca.php" target="_blank"><span>B.C.A.</span></a>

      </div>
    </div>

    <div class="card" data-aos="zoom-in">
      <div class="first-content">
        <span>U.I.E.T. [B.Tech]</span>
      </div>
      <div class="second-content">
        <a href="http://localhost/Hackathon/CSE.php" target="_blank"><span>B.Tech C.S.E.</span></a>
        <a href="http://localhost/Hackathon/Electrical.php" target="_blank"><span>B.Tech Electrical</span></a>
        <a href="http://localhost/Hackathon/Civil.php" target="_blank"><span>B.Tech Civil</span></a>
      </div>
    </div>


    <div class="card" data-aos="zoom-in">
      <div class="first-content">
        <span>Law</span>
      </div>
      <div class="second-content">
        <a href="http://localhost/Hackathon/ballb.php" target="_blank"><span>B.A. L.L.B.</span></a>
      </div>
    </div>
  </div>


  <div class="heading3" data-aos="fade-left">
    <h4>Our Uietians Gems</h4>
  </div>

  <div class="slider-container" data-aos="zoom-in">
    <div class="slider">
      <div class="slide">
        <article class="card2">
          <div class="temporary_text">
            <img src="img/1.png" alt="">
          </div>
          <div class="card_content">
            <span class="card_title">Siddharth</span>
            <p class="card_description">Sidharth, now part of Infosys, contributes dynamic expertise to the renowned
              company, harnessing skills in technology and innovation to drive forward-thinking solutions and elevate
              organizational success.</p>

          </div>
        </article>
      </div>


      <div class="slide">
        <article class="card2">
          <div class="temporary_text">
            <img src="img/2.png" alt="">
          </div>
          <div class="card_content">
            <span class="card_title">Varun Gupta</span>
            <p class="card_description">Varun Gupta, a skilled professional, secured a position at TCS, showcasing
              expertise in technology and a dedication to excellence, contributing to the company's success with
              innovation and determination.</p>

          </div>
        </article>
      </div>


      <div class="slide">
        <article class="card2">
          <div class="temporary_text">
            <img src="img/3.png" alt="">
          </div>
          <div class="card_content">
            <span class="card_title">Peeyush</span>
            <p class="card_description">Peeyush, an accomplished professional, has secured a position at Infosys,
              showcasing expertise and dedication. His role entails contributing valuable insights and leveraging skills
              to drive innovation and success within the organization.</p>

          </div>
        </article>
      </div>


      <div class="slide">
        <article class="card2">
          <div class="temporary_text">
            <img src="img/4.png" alt="">
          </div>
          <div class="card_content">
            <span class="card_title">Sweta</span>
            <p class="card_description">Sweta, now at Mindtree, adeptly blends technical expertise with innovative
              problem-solving. With a keen eye for detail, she thrives in collaborative environments, driving impactful
              solutions and fostering team success.</p>

          </div>
        </article>
      </div>


      <div class="slide">
        <article class="card2">
          <div class="temporary_text">
            <img src="img/5.png" alt="">
          </div>
          <div class="card_content">
            <span class="card_title">Tanisha</span>
            <p class="card_description">Tanisha, an experienced traveler, has found her niche at TravelBoutique,
              bringing expertise and passion to curate unforgettable journeys. Her dedication ensures personalized
              experiences tailored to each client's wanderlust desires..</p>

          </div>
        </article>
      </div>


      <div class="slide">
        <article class="card2">
          <div class="temporary_text">
            <img src="img/6.png" alt="">
          </div>
          <div class="card_content">
            <span class="card_title">Tina</span>
            <p class="card_description">"Tina, a seasoned traveler with a passion for adventure, offers personalized
              itineraries at TravelBoutique. With her expertise, she curates unforgettable journeys tailored to each
              client's desires and interests."</p>

          </div>
        </article>
      </div>


      <div class="slide">
        <article class="card2">
          <div class="temporary_text">
            <img src="img/7.png" alt="">
          </div>
          <div class="card_content">
            <span class="card_title">Harsh Sharma</span>
            <p class="card_description">Harsh Sharma, a diligent individual, has been successfully placed in Repozitory,
              leveraging his expertise and enthusiasm to contribute meaningfully to the organization's goals and
              objectives.</p>

          </div>
        </article>
      </div>


      <div class="slide">
        <article class="card2">
          <div class="temporary_text">
            <img src="img/8.png" alt="">
          </div>
          <div class="card_content">
            <span class="card_title">Sahil Kumar</span>
            <p class="card_description">Sahil Kumar, a diligent individual, has been successfully placed in Repozitory,
              leveraging his expertise and enthusiasm to contribute meaningfully to the organization's goals and
              objectives.</p>

          </div>
        </article>
      </div>


      <div class="slide">
        <article class="card2">
          <div class="temporary_text">
            <img src="img/9.png" alt="">
          </div>
          <div class="card_content">
            <span class="card_title">Abhinav Jain</span>
            <p class="card_description">Abhinav Jain, a diligent individual, has been successfully placed in Repozitory,
              leveraging his expertise and enthusiasm to contribute meaningfully to the organization's goals and
              objectives.</p>

          </div>
        </article>
      </div>
    </div>
  </div>


  <div class="heading4" data-aos="fade-left" id="onlinecourses">
    <h4>Get Free Online Courses from top sites</h4>
  </div>


  <div class="online-courses">

    <div class="card3" id="udemy" data-aos="zoom-in">
      <p class="heading5">Udemy Free Courses</p>
      <p>Click on card to access <i class="fa-solid fa-arrow-right"></i></p>
    </div>


    <div class="card3" id="courseera" data-aos="zoom-in">
      <p class="heading5">Course Era Free Courses</p>
      <p>Click on card to access <i class="fa-solid fa-arrow-right"></i></p>
    </div>


    <div class="card3" id="linkedin" data-aos="zoom-in">
      <p class="heading5">Linkedin Free Courses</p>
      <p>Click on card to access <i class="fa-solid fa-arrow-right"></i></p>
    </div>


    <div class="card3" id="skillshare" data-aos="zoom-in">
      <p class="heading5">Skill Share Free Courses</p>
      <p>Click on card to access <i class="fa-solid fa-arrow-right"></i></p>
    </div>

  </div>



  <footer data-aos="fade-up" id="foot">
    <h3 class="footer-heading">Explore All Data</h3>

    <!-- grid section start -->
    <div class="links">
      <!-- 1st column -->
      <div class="first-column">
        <div class="site-name">
          <!-- site name  -->
          <h2>Edu Hub </h2>
          <p>exam preparatory</p>

        </div>

        <div class="description">
          <!-- purpose -->
          Edu Hub is founded by a small team of engineers in 2024, who had the dream of digitalizing study material for
          University students. Started from Maharishi Dayanan University, Regular course, we aim to add all universities
          of India.
        </div>

      </div>

      <!-- second colomn -->
      <div class="colomn">
        <h2 class="sub-heading">Important Links</h2>
        <div class="underline">

        </div>
        <!-- links -->
        <div class="other-links">
          <a href="">
            <p>Upload</p>
          </a>

          <a href="">
            <p>Datesheets</p>
          </a>

          <a href="">
            <p>Institution lists</p>
          </a>

          <a href="">
            <p>Syllabus</p>
          </a>
        </div>
      </div>

      <!-- third column -->
      <div class="colomn">

        <h2 class="sub-heading">Other Links</h2>
        <div class="underline">


        </div>


        <div class="other-links">
          <a href="">
            <p>Contact Us</p>
          </a>

          <a href="">
            <p>About Us</p>
          </a>

          <a href="">
            <p>Contributors</p>
          </a>

          <a href="">
            <p>Career with us</p>
          </a>
        </div>

      </div>

      <!-- forth colomn -->
      <div class="colomn">

        <h2 class="sub-heading">Contact Us</h2>
        <div class="underline">


        </div>

        <div class="email">
          <a href="">
            <svg class="h-8 w-8 text-blue-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="1"
              stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" />
              <rect x="3" y="5" width="18" height="14" rx="2" />
              <polyline points="3 7 12 13 21 7" />
            </svg>
          </a>

          <p>eduhub@gmail.com</p>
        </div>

        <div class="plattforms">




          <a href="">
            <svg class="h-8 w-8 text-blue-500" viewBox="0 0 24 24" height="24" width="24" fill="green" stroke="black"
              stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
            </svg>
          </a>

          <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512 " fill="green" stroke-width="2px"
              stroke="white" height="24"
              width="24"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path
                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
            </svg>
          </a>

          <a href="">
            <svg class="h-8 w-8 green" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="green"
              fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" />
              <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
            </svg>
          </a>

          <a href="">
            <svg class="h-8 w-8 text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="green"
              fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" />
              <rect x="4" y="4" width="16" height="16" rx="4" />
              <circle cx="12" cy="12" r="3" />
              <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="copyright-section ">

      <p>Copyright ©2024 Edu Hub. All Rights Reserved</p>

      <div class="three-rules">
        <div class="rule Support">Support </div>
        <div class="rule Disclaimer">Disclaimer </div>
        <div class="rule"> Privacy Policy</div>
      </div>
    </div>
  </footer>

  <script src="home.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();

    offset: -10 // offset (in px) from the original trigger point
    delay: 3000 // values from 0 to 3000, with step 50ms
    duration: 30 // values from 0 to 3000, with step 50ms
    easing: 'linear' // default easing for AOS animations
    once: false // whether animation should happen only once - while scrolling down
    mirror: false // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom'
  </script>
  <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
  <script src="https://mediafiles.botpress.cloud/c414d513-a387-4db7-bb75-13bdf1f74c82/webchat/config.js" defer></script>

</body>

</html>