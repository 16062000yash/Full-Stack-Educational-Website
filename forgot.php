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
    </style>
    <title>Forgot password</title>
</head>
<body>
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
              <label for="exampleInputPassword1" class="form-label">New Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="exampleInputPassword2" name="npassword" required>
            </div>
            <input type="submit" class="btn btn-primary" value="Change" name="change">
        </form>
    </div>
</body>
</html>