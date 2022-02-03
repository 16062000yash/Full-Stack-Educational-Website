<!DOCTYPE html>
<html lang="en">
<?php include 'config.php'?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
  <style>
    h1,
    p{
      color: #fff;
    }
    .jobs{
      width: 30rem;
      height: 32rem;
      border: 1px solid black;
    }
    .heading{
      background: linear-gradient(rgba(0, 0, 0, 0.65),rgba(0,0,0,0.65)),url('image/cheader.jpg');
      background-size: cover;
    }
    .heading h3,
    .heading h4{
      color: white;
    }
  </style>
</head>
<body>
  <main>
  <div class="banner">
  <div class="jumbotron" style="background: linear-gradient(rgba(0, 0, 0, 0.65),rgba(0,0,0,0.65)),url('image/marvin-meyer-SYTO3xs06fU-unsplash.jpg'); background-size:cover;">
    <h1 class="display-4" style="padding:30px;"><b>Courses</b></h1>
    <div class="lead"  style="padding:30px;"><p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <!-- <hr class="my-4"> -->
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  </div>
    <p class="lead" style="padding:30px;">
      <a class="btn btn-primary btn-lg" href="#" role="button" >Learn more</a><br><br>
    </p>
  </div>
  </div>
  <div class="row">
    <?php
      $sql= "SELECT `Course_name`, `Course_desc`, `Price`, `Total_seats`, `Seats_available`, `Duration`, `Modules`, `Time` FROM `course`";
      $result = mysqli_query($conn,$sql);
        if($result->num_rows>0){
          while($rows=$result->fetch_assoc()){
      echo'
       <div class="col-md-4" style="padding-left:30px;">
            <div class="jobs">
            <div class="heading">
              <h3 style="text-align: center;">'.$rows['Course_name'].'</h3>
              <h4 style="text-align: right;padding-right:15px;"><b>Price: Rs </b>'.$rows['Price'].'</h4>            
              <p style="color: white;text-align: justify;padding-left:15px;">'.$rows['Course_desc'].'</p><br>
            </div>
            <p style="color: black;padding-left:15px;"><b>Total Seats: </b>'.$rows['Total_seats'].'</p>
            <p style="color: black;padding-left:15px;"><b>Available Seats: </b>'.$rows['Seats_available'].'</p>
            <p style="color: black;padding-left:15px;"><b>Duration: </b>'.$rows['Duration'].'</p>
            <p style="color: black;padding-left:15px;"><b>Modules: </b>'.$rows['Modules'].'</p>
            <p style="color: black;padding-left:15px;"><b>Time: </b>'.$rows['Time'].'</p>
            <p style="padding-left:15px;"><button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
            Proceed to pay
            </button></p><br><br>
            </div>
       </div>';
      }
    }
    ?>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Apply for course</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST">                
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Name:</label>
                  <input type="text" class="form-control" name="name" required>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Applying For:</label>
                  <input type="text" class="form-control" name="qual" required>
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Branch:</label>
                  <input type="text" class="form-control" name="branch" required>
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Year:</label>
                  <input type="text" class="form-control" name="year" required>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="apply" class="btn btn-primary">Apply</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>