<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e7dad6912e.js" crossorigin="anonymous"></script>
    <style>
        body{
            background-image: url(image/marvin-meyer-SYTO3xs06fU-unsplash.jpg);
            background-size: cover;
            background-position: center;
        }
        form{
            background-color: white;
            margin-top: 6em;
            margin-left: 30em;
            margin-right: 10em;
            padding: 30px;
            box-shadow: 10px 10px 8px 10px #888;
        }
        header{
            padding: 10px 10px;
        }
        button{
            padding:.7rem 2rem;
            font-size: 1rem;
            color:#fff;
            background:var(--gradient);
            background-color: #f39c12;
            border-radius: 2rem;
            margin-top: 1rem;
            cursor: pointer;
            box-shadow: 0 .1rem .3rem rgba(0,0,0,.3);
            position: relative;
            overflow: hidden;
            z-index: 0;
        }
       
        button span{
            color: black;
            font-size: 1rem;
            font-weight: 600;
        }
        button i{
            color: black;
            font-size: 1rem;
            padding: 1rem .1rem;
        }
        button a{
            text-decoration: none;
        }
       button:hover{
            background-color:red;
            color: white;
            transition: 0.5s;
        }
    </style>
    <title>Register</title>
</head>
<body>
    <header>
      <button><a href="admin.php"><i class="far fa-user-circle"></i>
            <span>Admin SignIn</span></a>
      </button>
    </header>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="name" required>
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="exampleInputNumber" name="phone_no" required>
              </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label"> Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2" name="cpassword" required>
            </div>
            <input type="submit" class="btn btn-primary" value='Submit' name="submit">
            
            <br>
            Already Registered? <a href="Login.php">Login</a>
          </form>
    </div><br>
</body>
</html>