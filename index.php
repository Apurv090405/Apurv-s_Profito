<?php

// Database connection parameters
$servername = "localhost";
$username = "";
$password = "";
$dbname = "profito";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect form data
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
  $message = mysqli_real_escape_string($conn, $_POST["message"]);

  // Use prepared statement to prevent SQL injection
  $stmt = $conn->prepare("INSERT INTO contact (Name, email, phone, message) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name, $email, $phone, $message);

  if ($stmt->execute()) {
    echo "Record added successfully";
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close the prepared statement
  $stmt->close();
}

// Close the database connection
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="jigar sable, portfolio, jigar, full stack dev, personal portfolio lifecodes, portfolio design, portfolio website, personal portfolio" />
  <meta name="description" content="Welcome to Jigar's Portfolio. Full-Stack Web Developer and Android App Developer" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Favicon -->
  <link id='favicon' rel="shortcut icon" href="favicon.png" type="image/x-png">
  <title>Portfolio | Apurv Chudasama</title>
</head>

<body oncontextmenu="return false">






  <!-- navbar starts -->
  <header>
    <a href="/" class="logo">Apurv Chudasama</a>

    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
      <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#education">Education</a></li>
        <li><a href="#work">Work</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>
  <!-- navbar ends -->





  <!-- hero section starts -->
  <section class="home" id="home">
    <div id="particles-js"></div>

    <div class="content">
      <h2>Hi There,<br /> I'm Apurv <span>Chudasama</span></h2>
      <p>i am into <span class="typing-text"></span></p>
      <a href="#about" class="btn"><span>About Me</span>
        <i class="fas fa-arrow-circle-down"></i>
      </a>
      <div class="socials">
        <ul class="social-icons">
          <li><a class="linkedin" aria-label="LinkedIn" href="https://www.linkedin.com/in/apurv-chudasama-744b05258/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
          <li><a class="github" aria-label="GitHub" href="https://github.com/Apurv090405" target="_blank"><i class="fab fa-github"></i></a></li>
          <!-- <li><a class="twitter" aria-label="Twitter" href="" target="_blank"><i class="fab fa-twitter"></i></a></li> -->
          <!-- <li><a class="telegram" aria-label="Telegram" href="" target="_blank"><i class="fab fa-telegram-plane"></i></a></li> -->
          <li><a class="instagram" aria-label="Instagram" href="https://www.instagram.com/neptune_seeker_9/"><i class="fab fa-instagram" target="_blank"></i></a></li>
          <!-- <li><a class="dev" aria-label="Dev" href="" target="_blank"><i class="fab fa-dev"></i></a></li> -->
          <li><a href="mailto:apurvchudasama.edu@gmail.com" class="fas fa-envelope" aria-label="Mail" target="_blank"></a></li>
        </ul>
      </div>
    </div>
    <div class="image">
      <img draggable="false" class="tilt" src="hero.png" alt="">
    </div>
  </section>
  <!-- hero section ends -->




  <!-- about section starts -->
  <section class="about" id="about">
    <h2 class="heading"><i class="fas fa-user-alt"></i> About <span>Me</span></h2>

    <div class="row">

      <div class="image">
        <img draggable="false" class="tilt" src="apurv.png" alt="">
      </div>
      <div class="content">
        <h3>I'm Apurv</h3>
        <span class="tag">Learning Entuthiasis</span>

        <p>I'm Apurv Chudasama, a Computer Science B.Tech student at Chandubhai S. Patel Institute of Technology, CHARUSAT
          University. I specialize as a machine learning engineer and programmer, with skills in C, C++, Python, PHP, and Java. As
          a PHP backend developer, I'm well-versed in PHP and MySQL. I'm passionate about AI, ML, and DL, always exploring the
          latest developments in these fields. </p>

        <div class="box-container">
          <div class="box">
            <p><span> email : </span> apurvchudasama.edu@gmail.com</p>
            <p><span> place : </span> Jamnagar, Gujarat - 361001</p>
          </div>
        </div>

        <!-- <div class="resumebtn">
            <a href="" target="_blank" class="btn"><span>Resume</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div> -->

      </div>
    </div>
  </section>
  <!-- about section ends -->





  <!-- skills section starts -->
  <section class="skills" id="skills">

    <h2 class="heading"><i class="fas fa-laptop-code"></i> Skills & <span>Abilities</span></h2>

    <div class="container">
      <div class="row" id="skillsContainer">

        <div class="bar">
          <div class="info">
            <img src="cpp.png" alt="C++ Icon" title="C++ Icon" />
            <span>C++</span>
          </div>
        </div>

        <div class="bar">
          <div class="info">
            <img src="python.gif" alt="Python Icon" title="Python Icon" />
            <span>Python</span>
          </div>
        </div>

        <div class="bar">
          <div class="info">
            <img src="java.gif" alt="Java Icon" title="Java Icon" />
            <span>Java</span>
          </div>
        </div>

        <div class="bar">
          <div class="info">
            <img src="php.png" alt="PHP Icon" title="PHP Icon" />
            <span>PHP</span>
          </div>
        </div>

        <div class="bar">
          <div class="info">
            <img src="ml.gif" alt="Machine Learning Icon" title="Machine Learning Icon" />
            <span>Machine Learning</span>
          </div>
        </div>

        <div class="bar">
          <div class="info">
            <img src="coad.gif" alt="Programming Icon" title="Programming Icon" />
            <span>Programming</span>
          </div>
        </div>


      </div>
    </div>
  </section>
  <!-- skills section ends -->





  <!-- education section starts -->
  <section class="education" id="education">

    <h1 class="heading"><i class="fas fa-graduation-cap"></i> My <span>Education</span></h1>

    <p class="qoute">Education is not the learning of facts, but the training of the mind to think.</p>

    <div class="box-container">

      <div class="box">
        <div class="image">
          <img draggable="false" src="cspit.jpg" alt="CSPIT-CHARUSAT">
        </div>
        <div class="content">
          <h3>Bachelor of Technology in Computer Science</h3>
          <p>Chandubhai S Patel Institute of Technology || CSPIT-CHARUSAT</p>
          <h4>2022-2026 | Pursuing</h4>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img draggable="false" src="bsos.jpg" alt="">
        </div>
        <div class="content">
          <h3>HSC Science | Informatic Practices</h3>
          <p>Shree Brilint School of Science | GBSE</p>
          <h4>2007-2022 | Completed</h4>
        </div>
      </div>

    </div>
  </section>
  <!-- education section ends -->






  <!-- work project section starts -->
  <section class="work" id="work">
    <h2 class="heading"><i class="fas fa-laptop-code"></i> Projects <span>Made</span></h2>
    <div class="box-container">

      <div class="box tilt">
        <img draggable="false" src="p1.png" alt="" />
        <div class="content">
          <div class="tag">
            <h3>Files Managment and Console Design in C++</h3>
          </div>
          <div class="desc">
            <p>Files Management and Console Design in C++ project involves efficient file operations and a well-designed console
              interface, enhancing user experience and optimizing file-related tasks.</p>
            <div class="btns">
              <a href="https://github.com/Apurv090405/Files_Project_in_Cpp.git" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
              <a href="https://github.com/Apurv090405/Files_Project_in_Cpp.git" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="box tilt">
        <img draggable="false" src="p2.jpg" alt="" />
        <div class="content">
          <div class="tag">
            <h3>Taskiverse - ToDoList Website</h3>
          </div>
          <div class="desc">
            <p>Taskiverse is a user-friendly todo-list website offering seamless login, logout, and task management. Users can
              effortlessly add, view, and delete tasks, ensuring a streamlined experience with the added convenience of a logout
              feature.</p>
            <div class="btns">
              <a href="http://taskiverse.infinityfreeapp.com" class="btn" target="_blank"><i class="fas fa-eye"></i> View</a>
              <a href="https://github.com/Apurv090405/ToDoList.git" class="btn" target="_blank">Code <i class="fas fa-code"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="viewall">
      <a href="Projects.html" class="btn"><span>View All</span>
        <i class="fas fa-arrow-right"></i>
      </a>
    </div>
  </section>
  <!-- work project section ends -->






  <!-- experience section starts -->
  <section class="experience" id="experience">

    <h2 class="heading"><i class="fas fa-briefcase"></i> Experience </h2>
    <br>
    <div class="timeline">

      <div class="container right">
        <div class="content">
          <div class="tag">
            <h2>Self Employed</h2>
          </div>
          <div class="desc">
            <h3>Machine learning Student</h3>
            <p>2022 - present</p>
          </div>
        </div>
      </div>

      <div class="container left">
        <div class="content">
          <div class="tag">
            <h2>Technical Coordinator</h2>
          </div>
          <div class="desc">
            <h3>Computer Science Dept. CSPIT-CHARUSAT | Role</h3>
            <p>Present</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container right">
      <div class="content">
        <div class="tag">
          <h2>The Spark Foundation</h2>
        </div>
        <div class="desc">
          <h3>Data Science | learning-Internship</h3>
          <p>May 2022 - June 2022</p>
        </div>
      </div>
    </div>

    <!-- <div class="container left">
        <div class="content">
          <div class="tag">
            <h2>Mapstreak Flyseas</h2>
          </div>
          <div class="desc">
            <h3>Web Developer | Internship</h3>
            <p>June 2021 - Dec 2021</p>
          </div>
        </div>
      </div> -->



    <!-- <div class="container left">
        <div class="content">
          <div class="tag">
            <h2>The Spark Foundation</h2>
          </div>
          <div class="desc">
            <h3>Mobile Application Developer | Internship</h3>
            <p>April 2021 - May 2021</p>
          </div>
        </div>
      </div> -->

    <!-- <div class="container right">
        <div class="content">
          <div class="tag">
            <h2>Frshr Technologies</h2>
          </div>
          <div class="desc">
            <h3>Wordpress Developer | Internship</h3>
            <p>April 2021 - April 2021</p>
          </div>
        </div>
      </div> -->


    <!-- <div class="morebtn">
      <a href="/experience" class="btn"><span>View All</span>
        <i class="fas fa-arrow-right"></i>
      </a>
    </div> -->

    </div>

  </section>
  <!-- experience section ends -->









  <!-- contact section starts -->
  <section class="contact" id="contact">

    <h2 class="heading"><i class="fas fa-headset"></i> Get in <span>Touch</span></h2>

    <div class="container">
      <div class="content">
        <div class="image-box">
          <img draggable="false" src="contact1.png" alt="">
        </div>


        <form id="contact-form" method="POST" action="">
          <div class="form-group">
            <div class="field">
              <input type="text" name="name" placeholder="Name" required>
              <i class='fas fa-user'></i>
            </div>
            <div class="field">
              <input type="text" name="email" placeholder="Email" required>
              <i class='fas fa-envelope'></i>
            </div>
            <div class="field">
              <input type="text" name="phone" placeholder="Phone">
              <i class='fas fa-phone-alt'></i>
            </div>
            <div class="message">
              <textarea placeholder="Message" name="message" required></textarea>
              <i class="fas fa-comment-dots"></i>
            </div>
          </div>
          <div class="button-area">
            <button type="submit">
              Submit <i class="fa fa-paper-plane"></i></button>
          </div>
        </form>


      </div>
    </div>
  </section>
  <!-- contact section ends -->


  <!-- footer section starts -->
  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>Apurv's Portfolio</h3>
        <p>Thank you for visiting my personal portfolio website. Connect with me over socials. <br /> <br /> Keep Rising 🚀. Connect with me over live chat!</p>
      </div>

      <div class="box">
        <h3>quick links</h3>
        <a href="#home"><i class="fas fa-chevron-circle-right"></i> home</a>
        <a href="#about"><i class="fas fa-chevron-circle-right"></i> about</a>
        <a href="#skills"><i class="fas fa-chevron-circle-right"></i> skills</a>
        <a href="#education"><i class="fas fa-chevron-circle-right"></i> education</a>
        <a href="#work"><i class="fas fa-chevron-circle-right"></i> work</a>
        <a href="#experience"><i class="fas fa-chevron-circle-right"></i> experience</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <p> <i class="fas fa-phone"></i>+91 9409339698</p>
        <p> <i class="fas fa-envelope"></i>apurvchudasama.edu@gmail.com</p>
        <p> <i class="fas fa-map-marked-alt"></i>Gujarat, India-412206</p>
        <div class="share">

          <a href="https://www.linkedin.com/in/apurv-chudasama-744b05258/" class="fab fa-linkedin" aria-label="LinkedIn" target="_blank"></a>
          <a href="https://github.com/Apurv090405" class="fab fa-github" aria-label="GitHub" target="_blank"></a>
          <a href="mailto:apurvchudasama.edu@gmail.com" class="fas fa-envelope" aria-label="Mail" target="_blank"></a>
          <a href="https://www.instagram.com/neptune_seeker_9/" class="fab fa-instagram" aria-label="Instagram" target="_blank"></a>

        </div>
      </div>
    </div>

    <h1 class="credit">Designed with <i class="fa fa-heart pulse"></i> by <a href="https://www.linkedin.com/in/apurv-chudasama-744b05258/"> Apurv Chudasama</a></h1>

  </section>
  <!-- footer section ends -->


  <!-- scroll top btn -->
  <a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
  <!-- scroll back to top -->


  <!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
  <!-- jquery cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- typed.js cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js" integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- particle.js links -->
  <script src="particles.min.js"></script>
  <script src="app.js"></script>

  <!-- vanilla tilt.js links -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js" integrity="sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- scroll reveal anim -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>

  <!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

  <script src="script.js"></script>

</body>

</html>