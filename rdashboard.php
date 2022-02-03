<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
      .card-body1{
        padding-left: 1rem;
        font-size: 20px;
        text-transform: uppercase;
        word-spacing: normal;
      }
    </style>
</head>
<body>
<?php include 'header.php';?>
      <main>
        <section id="Feedback">
          <div class="content">
              <p><br>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                  View Profile
                </a>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                  Update Profile
                </button>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                  Post Query
                </button>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  Post Feedback
                </button>
              </p>
            <!-- post feedback section starts -->

            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <form method="POST">
                  <div class="mb-3">
                    <label for="Student Name" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="" name="sname">
                  </div>
                  <div class="mb-3">
                    <label for="Course Name" class="form-label">Course Name</label>
                    <input type="text" class="form-control" id="" name="cname">
                  </div>
                  <div class="mb-3">
                    <label for="Course Feedback" class="form-label">Feedback</label>
                    <input type="text" class="form-control" id="" name="feedback">
                  </div>
                  <div class="mb-3">
                    <label for="Ratings" class="form-label">Ratings: Out of 10</label>
                    <input type="number" class="form-control" id="" name="ratings">
                  </div>
                  <button type="submit" class="btn btn-primary" name="Feed">Submit</button>
                </form>
              </div>
            </div>

            <!-- post feedback section endss -->

          <!-- post query section starts -->

            <?php
                $userEmail = ""; //first we leave email field blank
                if(isset($_POST['Submit'])){ //if subscribe btn clicked
                  $userEmail = $_POST['Sender']; //getting user entered email
                  $name=$_POST['Name'];
                  $number=$_POST['Contact'];
                  $message=$_POST['Message'];
                if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //validating user email
                  $subject = "Thanks for Contacting us - Y.G Tutorials";
                  $body =  " Name: $name \n Email: $userEmail \n Contact: $number \n Message: $message";
                                                            
                  //php function to send mail
                if(mail($userEmail, $subject, $body)){
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
                </script> <!-- show error message if somehow mail can't be sent -->
                                                  
                <?php
                }
                }else{
                ?><!-- show error message if user entered email is not valid -->
                <script>
                alert('userEmail is not a valid email address!');
                </script>
                                          
                <?php 
                }
                }
              ?>

            <div class="collapse" id="collapseExample2">
              <div class="card card-body">
                <form method="POST">
                  <div class="mb-3">
                    <label for="Student Name" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="" name="Name">
                  </div>
                  <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="" name="Sender">
                  </div>
                  <div class="mb-3">
                    <label for="Contact" class="form-label">Contact Number</label>
                    <input type="tel" class="form-control" id="" name="Contact">
                  </div>
                  <div class="mb-3">
                    <label for="Message" class="form-label">Message</label>
                    <input type="text" class="form-control" id="" name="Message">
                  </div>
                  <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                </form>
              </div>
            </div>

            <!-- post query section endss -->

            <!-- update profile section starts -->
            <div class="collapse" id="collapseExample1">
              <div class="card card-body">
                <form class="row g-3" method="POST">
                  <div class="col-md-6">
                    <label for="inputName4" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputName4" name="name">
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="uemail">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="password">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword5" class="form-label"> Change Password</label>
                    <input type="password" class="form-control" id="inputPassword5" name="upassword">
                  </div>
                  <div class="col-md-6">
                    <label for="inputContact4" class="form-label">Contact Number</label>
                    <input type="tel" class="form-control" id="inputContact4" name="ucontact">
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                  </div>
                </form>
              </div>
            </div>

            <!-- update profile section ends -->

            <!-- view profile section starts -->
              <div class="collapse" id="collapseExample3">
                <div class="card card-body1">
                <form>
                  <h1 style="color: blue; font-weight:600; text-align:center; text-decoration:underline">Profile</h1><br>
                <?php                
                $res= "SELECT `Name`, `Email`, `phone_no` FROM `register` WHERE Name='himanshu lulla' ";
                $result = mysqli_query($conn,$res);
                  if($result->num_rows>0){
                    while($rows=$result->fetch_assoc()){
                echo'                  
                    <div class="mb-3">
                      <label for="Student Name" class="form-label"> <b>Student Name: </b>  '.$rows['Name'].'</label>  
                    </div>
                    <div class="mb-3">
                      <label for="Email" class="form-label"><b>Email: </b>'.$rows['Email'].'</label>                     
                    </div>
                    <div class="mb-3">
                      <label for="Contact Number" class="form-label"><b>Contact Number: </b> '.$rows['phone_no'].'</label>                      
                    </div>';
                  }
                }
                ?>
                <?php
                $sql= "SELECT `Applying`, `Branch`, `Year` FROM `candidates applied` WHERE Rname='himanshu lulla'";
                $result = mysqli_query($conn,$sql);
                  if($result->num_rows>0){
                    while($rows=$result->fetch_assoc()){
                echo' 
                    <div class="mb-3">
                      <label for="Branch" class="form-label"><b>Branch: </b> '.$rows['Branch'].'</label>                      
                    </div>
                    <div class="mb-3">
                      <label for="Year" class="form-label"><b>Year: </b>'.$rows['Year'].'</label>                      
                    </div>
                    <div class="mb-3">
                      <label for="Course" class="form-label"><b>Course Applied: </b>'.$rows['Applying'].'</label>                      
                    </div>';
                    }
                  }
                ?>              
              </form>
            </div>
          </div>
            <!-- view profile section ends -->

          </div>
        </section>
        <section>
          <h2> Your Feedback</h2>
          <?php
          $sql= "SELECT `Course_name`, `Feedback`, `Ratings` FROM `feedback` WHERE Student_Name='himanshu lulla'";
          $result = mysqli_query($conn,$sql);
          if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
        echo' 
            <div class="mb-3">
              <label for="Branch" class="form-label"><b>Course: </b> '.$rows['Course_name'].'</label>                      
            </div>
            <div class="mb-3">
              <label for="Year" class="form-label"><b>Your Feedback: </b>'.$rows['Feedback'].'</label>                      
            </div>
            <div class="mb-3">
              <label for="Course" class="form-label"><b>Ratings: </b>'.$rows['Ratings'].'</label>                      
            </div>';
            }
          }
        ?>
        <h2> Your Queries</h2>
        <?php
          $sql= "SELECT `Message`, `Response` FROM `contact_form` WHERE Name='himanshu lulla' ";
          $result = mysqli_query($conn,$sql);
          if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
        echo' 
            <div class="mb-3">
              <label for="Branch" class="form-label"><b>You: </b> '.$rows['Message'].'</label>                      
            </div>
            <div class="mb-3">
              <label for="Year" class="form-label"><b>Y.G Tutorials: </b>'.$rows['Response'].'</label>                      
            </div>';
            }
          }
        ?>

        </section>
      </main>
    
</body>
</html>