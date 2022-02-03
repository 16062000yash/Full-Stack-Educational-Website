<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'No. of students'],
          <?php
          $sql = "SELECT * FROM chart";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($result)){
            echo"['".$row['Task']."',".$row['no_students']."],";
          }
          ?>
        ]);

        var options = {
          title: 'Total Number Of',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>


    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Course', 'No. of Students'],
          <?php
          $sql = "SELECT * FROM chart2";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_assoc($result)){
            echo"['".$row['Domain']."',".$row['no_students']."],";
          }
          ?>
        ]);

        var options = {
          title: 'Registered Candidates in respective Domain',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
      <div class="sidebar-brand">
        <h2>
          <span class="lab la-accusoft"></span><span>Y.G Tutorials</span>
        </h2>
      </div>
      <div class="sidebar-menu">
        <ul>
          <li>
            <a href="dashboard.php" class="active"><span class="las la-igloo"></span>
            <span>Dashboard</span></a>
          </li>
          <li>
            <a href="course.php"><span class="las la-clipboard-list"></span>
            <span>Courses</span></a>
          </li>
          <li>
            <a href="#queries"><span class="las la-question"></span>
            <span>Query</span></a>
          </li>
          <li>
            <a href="#feedback"><span class="las la-comments"></span>
            <span>Feedback</span></a>
          </li>
          <li>
          <li>
            <a href="#emailsubscriber"><span class="las la-book-reader"></span>
            <span>Email Subscribers</span></a>
          </li>
          <li>
            <a href="Login.php"><span class="las la-sign-out-alt"></span>
            <span>Logout</span></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-content">
      <header>
        <h2>
          <label for="nav-toggle">
            <span class="las la-bars"></span>
          </label>
          Dashboard
        </h2>

        <div class="search-wrapper1">
          <span class="las la-search"></span>
          <input type="search" placeholder="Search here">
        </div>

        <div class="user-wrapper">
          <img src="image/admin.jpg" width="40px" height="40px" alt="">
          <div>
            <h4>Yash Goyal</h4>
            <small>Admin</small>
          </div>
        </div>
      </header>
      <main>
        <div class="dashboard-cards">
          <div class="card-single">
            <div>
            <?php
                          $sql= "SELECT ID FROM register";
                          $result = mysqli_query($conn,$sql);
                          $i=0;
                          if($result->num_rows>0){
                            while($rows=$result->fetch_assoc()){
                            $b =  ++$i;
                          }
                          echo"
                          <h1> $b</h1>";
                          $m= "UPDATE chart SET no_students = $b WHERE Task = 'Registered Candidates'";
                          $result=mysqli_query($conn,$m);
                        }
                          else{
                            echo"";
                          }
              ?>
              <span>Registered Students</span>
            </div>
            <div>
              <span class="las la-users"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <?php
                          $sql= "SELECT ID FROM course";
                          $result = mysqli_query($conn,$sql);
                          $i=0;
                          $a=11;
                          if($result->num_rows>0){
                            while($rows=$result->fetch_assoc()){
                            $b =  $a + ++$i;
                          }
                          echo"
                          <h1> $b</h1>";
                          $m= "UPDATE chart SET no_students = $b WHERE Task = 'courses offered'";
                          $result=mysqli_query($conn,$m);
                        }
                          else{
                            echo"";
                          }
              ?>
              <span>Courses Offered</span>
              </div><br>
              
            
            <div>
              <span class="las la-clipboard-list"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
            <?php
                          $sql= "SELECT 'S.No' FROM contact_form ";                         
                          $result = mysqli_query($conn,$sql);
                          $i=0;
                          if($result->num_rows>0){
                            while($rows=$result->fetch_assoc()){
                            $b = ++$i;
                          }
                          echo"
                          <h1> $b</h1>";
                          $m= "UPDATE chart SET no_students = $b WHERE Task = 'queries'";
                          $result=mysqli_query($conn,$m);
                          
                        }
                          else{
                            echo"";
                          }
              ?>
              <span>Queries</span>
            </div>
            <div>
              <span class="las la-question"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <?php
                          $sql= "SELECT 'S.No' FROM feedback ";                         
                          $result = mysqli_query($conn,$sql);
                          $i=0;
                          if($result->num_rows>0){
                            while($rows=$result->fetch_assoc()){
                            $b = ++$i;
                          }
                          echo"
                          <h1> $b</h1>";
                          $m= "UPDATE chart SET no_students = $b WHERE Task = 'feedback'";
                          $result=mysqli_query($conn,$m);
                          
                        }
                          else{
                            echo"";
                          }
              ?>
              
              <span>Feedback</span>
            </div>
            <div>
              <span class="las la-comments"></span>
            </div>
          </div>

        <div class="card-single">
            <div>
              <?php
                          $sql= "SELECT 'ID' FROM `candidates applied` ";                         
                          $result = mysqli_query($conn,$sql);
                          $i=0;
                          if($result->num_rows>0){
                            while($rows=$result->fetch_assoc()){
                            $b = ++$i;
                          }
                          echo"
                          <h1> $b</h1>";
                          $m= "UPDATE chart SET no_students = $b WHERE Task = 'candidates applied'";
                          $result=mysqli_query($conn,$m);
                          
                        }
                          else{
                            echo"";
                          }
              ?>
              
              <span>Candidates Applied</span>
            </div>
            <div>
              <span class="las la-user-graduate"></span>
            </div>
          </div>
        

        <div class="card-single">
            <div>
              <?php
                          $sql= "SELECT 'S.No' FROM emailsubscriber ";                         
                          $result = mysqli_query($conn,$sql);
                          $i=0;
                          if($result->num_rows>0){
                            while($rows=$result->fetch_assoc()){
                            $b = ++$i;
                          }
                          echo"
                          <h1> $b</h1>";
                          $m= "UPDATE chart SET no_students = $b WHERE Task = 'Email Subscribers'";
                          $result=mysqli_query($conn,$m);
                          
                        }
                          else{
                            echo"";
                          }
              ?>              
              <span>Email Subscribers</span>
            </div>
            <div>
              <span class="las la-book-reader"></span>
            </div>
          </div>
        </div><br>

        <div class="dashboard-cards">
          <div id="piechart_3d" style="width: 500px; height: 400px;"></div>
          <div id="donutchart" style="width: 500px; height: 400px;"></div>
        </div>
        <div class="recent-grid">
          <div class="projects">
            <div class="card">
              <div class="card-header">
                <h2>Recent Courses</h2>
                <button>See All <span class="las la-arrow-circle-right"></span></button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table width="100%">
                    <thead>
                      <tr>
                        <td>S.No</td>
                        <td>Course Name</td>
                        <td>Price</td>
                        <td>Seats Available</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $sql= "SELECT Course_name,Price,Seats_available FROM course";
                        $result = mysqli_query($conn,$sql);
                        $i=0;
                        if($result->num_rows>0){
                          while($rows=$result->fetch_assoc()){
                            echo"
                            <tbody>
                              <tr>
                                <td>".++$i."</td>
                                <td>". $rows['Course_name']."</td>
                                <td>".$rows['Price']."</td>
                                <td>".$rows['Seats_available']."</td>
                              </tr>";
                          }
                        }
                        else{
                          echo"";
                        }
                      ?>
                      
                    </tbody>
                  </table>
                </div> 
              </div>
            </div>
          </div><br>

          <div class="projects" id="queries">
            <div class="card">
              <div class="card-header">
                <h2>Queries</h2>
                <button>See All <span class="las la-arrow-circle-right"></span></button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table width="100%">
                    <thead>
                      <tr>
                        <td>S.No</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Contact No.</td>
                        <td>Message</td>
                        <td>Response</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $sql= "SELECT `Name`, `Email`, `Contact_Number`, `Message`, `Response` FROM `contact_form`";
                        $result = mysqli_query($conn,$sql);
                        $i=0;
                        if($result->num_rows>0){
                          while($rows=$result->fetch_assoc()){
                            echo"
                            <tbody>
                              <tr>
                                <td>".++$i."</td>
                                <td>". $rows['Name']."</td>
                                <td>".$rows['Email']."</td>
                                <td>".$rows['Contact_Number']."</td>
                                <td>".$rows['Message']."</td>
                                <td>".$rows['Response']."</td>
                              </tr>";
                          }
                        }
                        else{
                          echo"";
                        }
                      ?>
                      
                    </tbody>
                  </table>
                </div> 
              </div>
            </div>
          </div><br> 
          <div class="customers">
            <div class="card">
              <div class="card-header">
                <h3>New Students</h3>
                <button>See all<span class="las la-arrow-circle-right"></span></button>
              </div>
              <div class="card-body">
                <div class="customer">
                  <table width="100%" class="table">
                    <thead>
                      <tr>
                        <td>S.No</td>
                        <td>Name</td>
                        <td>Domain</td>
                        <td>Branch</td>
                        <td>Year</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $sql= "SELECT `ID`, `Rname`, `Applying`, `Branch`, `Year` FROM `candidates applied`";
                        $result = mysqli_query($conn,$sql); 
                        $i=0;
                        if($result->num_rows>0){
                          while($rows=$result->fetch_assoc()){
                            echo"
                            <tbody>
                              <tr>
                                <td>".++$i."</td>
                                <td>".$rows['Rname']."</td>
                                <td>".$rows['Applying']."</td>
                                <td>".$rows['Branch']."</td>
                                <td>".$rows['Year']."</td>
                              </tr>";
                          }
                        }
                        else{
                          echo"";
                        }         
                      ?>            
                    </tbody>
                  </table>
              </div> 
            </div>
          </div><br>

          <div class="projects" id="emailsubscriber">
            <div class="card">
              <div class="card-header">
                <h2>Email Subscribers</h2>
                <button>See All <span class="las la-arrow-circle-right"></span></button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table>
                    <thead>
                      <tr>
                        <td>S.No</td>
                        <td>Email</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $sql= "SELECT `Email` FROM `emailsubscriber`";
                        $result = mysqli_query($conn,$sql);
                        $i=0;
                        if($result->num_rows>0){
                          while($rows=$result->fetch_assoc()){
                            echo"
                            <tbody>
                              <tr>
                                <td>".++$i."</td>
                                <td>".$rows['Email']."</td>
                              </tr>";
                          }
                        }
                        else{
                          echo"";
                        }
                      ?>
                      
                    </tbody>
                  </table>
                </div> 
              </div>
            </div>
          </div><br> 
          <div class="projects" id="feedback">
            <div class="card">
              <div class="card-header">
                <h2>Feedback</h2>
                <button>See All <span class="las la-arrow-circle-right"></span></button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table>
                    <thead>
                      <tr>
                        <td>S.No</td>
                        <td>Student Name</td>
                        <td>Course Name</td>
                        <td>Feedback</td>
                        <td>Ratings</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $sql= "SELECT `Student_Name`, `Course_name`, `Feedback`, `Ratings` FROM `feedback`";
                        $result = mysqli_query($conn,$sql);
                        $i=0;
                        if($result->num_rows>0){
                          while($rows=$result->fetch_assoc()){
                            echo"
                            <tbody>
                              <tr>
                                <td>".++$i."</td>
                                <td>".$rows['Student_Name']."</td>
                                <td>".$rows['Course_name']."</td>
                                <td>".$rows['Feedback']."</td>
                                <td>".$rows['Ratings']."</td>
                              </tr>";
                          }
                        }
                        else{
                          echo"";
                        }
                      ?>
                      
                    </tbody>
                  </table>
                </div> 
              </div>
            </div>
          </div><br> 
          <div class="content">
        <p><br>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
            Post Response
          </a>
          <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Post Course
          </button>
          <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
            Search Profile
          </button>
          
        </p>
        
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <form method="POST">
              <div class="mb-3">
                <label for="Course Name" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="" name="cname">
              </div>
              <div class="mb-3">
                <label for="Course Description" class="form-label">Course Description</label>
                <input type="text" class="form-control" id="" name="cdesc">
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="" name="price">
              </div>
              <div class="mb-3">
                <label for="exampleInputPosition" class="form-label">Total Seats</label>
                <input type="text" class="form-control" id="exampleInputPosition" name="pos">
              </div>
              <div class="mb-3">
                <label for="JobDesc" class="form-label">Seats Available</label>
                <input type="text" class="form-control" id="JobDesc" name="pos1">
              </div>
              <div class="mb-3">
                <label for="Duration" class="form-label">Duration</label>
                <input type="text" class="form-control" id="Duration" name="dur">
              </div>
              <div class="mb-3">
                <label for="Modules" class="form-label">Modules</label>
                <input type="number" class="form-control" id="Modules" name="mod">
              </div>
              <div class="mb-3">
                <label for="Time" class="form-label">Time</label>
                <input type="text" class="form-control" id="Time" name="time">
              </div>
              <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
            </form>
          </div>
        </div>
        <!--  -->

        <div class="collapse" id="collapseExample1">
          <div class="card card-body">
            <form method="POST">
              <div class="mb-3">
                <label for="Student Name" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="" name="name">
              </div>
              <div class="mb-3">
                <label for="Query Description" class="form-label">Response</label>
                <input type="text" class="form-control" id="" name="response">
              </div>
              <button type="submit" class="btn btn-primary" name="Response">Submit</button>
            </form>
          </div>
        </div>

        <div class="collapse" id="collapseExample2">
          <div class="card card-body">
            <form method="POST">
              <h1 style="color: blue; font-weight:600; text-align:center; text-decoration:underline">Profile</h1><br>
              <?php
              $searchname = "";
              if(isset($_POST['Search'])){ 
              $searchname = $_POST['Sname'];
              echo "<b>Student Name:</b> $searchname <br>";
              $res= "SELECT `Name`, `Email`, `Contact_Number` FROM `contact_form` WHERE Name='$searchname' ";
              $result = mysqli_query($conn,$res);
              $i=0;
              if($result->num_rows>0){
                while($rows=$result->fetch_assoc()){
                  echo'<br>
                  <div class="mb-3">
                    <label for="Email" class="form-label"><b>Email: </b>'.$rows['Email'].'</label>                     
                  </div>
                  <div class="mb-3">
                    <label for="Contact Number" class="form-label"><b>Contact Number: </b> '.$rows['Contact_Number'].'</label>                      
                  </div>';
                }
              }
              ?>
              <?php
                $sql= "SELECT `Applying`, `Branch`, `Year` FROM `candidates applied` WHERE Rname='$searchname'";
                $result = mysqli_query($conn,$sql);
                  if($result->num_rows>0){
                    while($rows=$result->fetch_assoc()){
                      echo'<br> 
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
                <?php
                }
              ?>

              <div class="mb-3">
                <label for="Student Name" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="" name="Sname">
              </div>
              <button type="submit" class="btn btn-primary" name="Search">Go</button>
            </form>
          </div>
        </div>
      </div>
    </main>
        
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>