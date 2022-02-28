<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://kit.fontawesome.com/e7dad6912e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
            <a href="rdashboard.php" class="active" ><span class="las la-igloo"></span>
            <span>Dashboard</span></a>
          </li>
          <li>
            <a href="phpvideo.php"><span class="las la-clipboard-list"></span>
            <span> My Courses</span></a>
          </li>
          <li>
            <a href="#Feedback"><span class="las la-book-reader"></span>
            <span>Feedback</span></a>
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

        <div class="search-wrapper">
          <div class="search-input">
            <input type="search" placeholder="Search here">
            <div class="autocom-box">
              
            </div>
            <div class="icon"><i class="fas fa-search"></i></div>
          </div>
        </div>
        <script src="js/suggestions.js"></script>
        <script src="js/script.js"></script>

        <div class="user-wrapper">
          <img src="" width="40px" height="40px" alt="">
          <div>
            <h4>Himanshu Lulla</h4>
            <small>User</small>
          </div>
        </div>
      </header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
