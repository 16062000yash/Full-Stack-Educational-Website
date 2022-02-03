<?php
include 'config.php';
$msg="";

?>
<!doctype html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>educational website</title>
        <link rel="stylesheet" href="d.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/e7dad6912e.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="index.html"><img src="image/logo.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times"onclick="hideMenu()" ></i>
                    <ul>
                        <li><a href="">HOME</a></li>
                        <li><a href="aboutus.html">ABOUT US</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                        <li><a href="courseinfo.html">COURSES</a></li>
                        <li><a href="team.html">TEAM</a></li>
                        <li><a href="faq.html">FAQ'S</a></li>
                        <li><a href="Login.php">LOGIN</a><li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
        <div class="text-box">
                <h1>Start Learning Now</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum repellendus fugit eos, neque veritatis est doloremque dolores.<br> Consectetur sequi quasi eveniet omnis, excepturi error veniam. Dolores natus nostrum veniam eveniet.</p>
                <input type="checkbox" id="toggle">
                <a href="" class="hero-btn">Subscribe Now</a>
                
  <!-- <label for="toggle" class="show-btn">Show Subscription Form</label> -->
  <div class="wrapper">
    <label for="toggle">
    <i class="cancel-icon fas fa-times"></i>
    </label>
    <div class="icon"><i class="far fa-envelope"></i></div>
    <div class="content">
      <header>Become a Subscriber</header>
      <p>Subscribe to our blog and get the latest updates straight to your inbox.</p>
    </div>
    <form action="" method="POST">
    <?php 
    $userEmail = ""; //first we leave email field blank
    if(isset($_POST['subscribe'])){ //if subscribe btn clicked
      $userEmail = $_POST['email']; //getting user entered email
      if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //validating user email
        $subject = "Thanks for Subscribing us - Y.G Tutorials";
        $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";
        
        //php function to send mail
        if(mail($userEmail, $subject, $message)){
          ?>
          <script>
          alert('email send successfully');
          </script> <!-- show sucess message once email send successfully -->
          
          <?php
          $userEmail = "";
        }else{
          ?>
           <script>
          alert('mail not sent');
          </script> 
          <!-- show error message if somehow mail can't be sent -->
           
          <?php
        }
      }else{
        ?>
        <!-- show error message if user entered email is not valid -->
        <script>
        alert('userEmail is not a valid email address!');
        </script>
       
          <?php 
      }
    }
    ?>
      <div class="field">
        <input type="text" class="email" name="email" placeholder="Email Address" required value="<?php echo $userEmail ?>">
      </div>
      <div class="field btn">
        <div class="layer"></div>
        <button type="submit" name="subscribe">Subscribe</button>
        <span style="color: red;"><?php echo '$msg'?></span>
      </div>
    </form>
    <div class="text">We do not share your information.</div>
  </div>
                <a href="course.php" class="hero-btn">Explore Now</a>
        </div>
        </section>
        <!-- java script for toggle menu starts -->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right ="0";
        }
        function hideMenu(){
            navLinks.style.right ="-200px";
        }
    </script>
    <!-- javascript for toggle menu ends -->
    </body>
</html>