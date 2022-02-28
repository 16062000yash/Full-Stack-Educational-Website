
<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video lectures</title>
    <link rel="stylesheet" href="video.css">
    <script src="https://kit.fontawesome.com/e7dad6912e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navigation-div">
        <div class="nav-left navigation-div">
            <i class="fas fa-bars"></i>
            <img src="image/logo.png">
        </div>

        <div class="nav-middle navigation-div">
            <div class="search-box navigation-div">
                <input type="text" placeholder="Search here....">
                <i class="fas fa-search"></i>
            </div>
        </div>

        <div class="nav-right navigation-div">            
            <i class="fas fa-video-plus"></i>
            <i class="fas fa-chevron-circle-down"></i>
            <i class="fas fa-bell"></i>
            <i class="fas fa-user-circle"></i>
        </div>
    </nav>
    <div class="sidebar">
        <div class="quick-links">
            <a href=""><i class="fas fa-home"></i><p>Home</p></a>
            <a href=""><i class="fas fa-compass"></i><p>Explore</p></a>
            <a href=""><i class="fas fa-play-circle"></i><p>Playlist</p></a>
            <a href=""><i class="fas fa-chevron-circle-down"></i><p>Show more</p></a>
            <hr>           
        </div>
        <div class="subscribed-courses">
            <h3>COURSES</h3>
            <a href=""><p>Web development</p></a>
        </div>
    </div>

    <!-- code for main content starts -->
    <div class="container">
        <div class="banner">
            <img src="image/tim-mossholder-WE_Kv_ZB1l0-unsplash.jpg" >
        </div>

        <!-- code for video thumbnail starts -->

        <div class="list-container">
            <div class="video-list">
                <?php
                    $q = "SELECT* FROM videos";
                    $query = mysqli_query($conn,$q);

                    while($row=mysqli_fetch_array($query)){
                ?>
                <div class="video-list">
                    <video poster="" class="thumbnail" width="100%" height= "200px" controls>
                    <source src="<?php echo 'videos/'.$row['Name'];?>"></video>
                <!-- <a href=""> -->
                    <!-- <img src="image/web-development-.jpg" class="thumbnail"></a> -->
                <div class="navigation-div">
                    <img src="image/logo.png">
                    <div class="video-info">
                        <a href=""> Full stack web development</a>
                        <p>Y.G Tutorials</p>
                        <p>100K views &bull; 3 days ago</p>
                    </div>
                </div>
            </div>
                   <?php }
                   ?>
            </div>
            <div class="video-list">
                <a href=""><img src="image/web-development-.jpg" class="thumbnail"></a>
                <div class="navigation-div">
                    <img src="image/logo.png">
                    <div class="video-info">
                        <a href=""> Full Stack Web Development</a>
                        <p>Y.G Tutorials</p>
                        <p>100K views &bull; 3 days ago</p>
                    </div>
                </div>
            </div>

            <div class="video-list">
                <a href=""><img src="image/AI.jpg" class="thumbnail"></a>
                <div class="navigation-div">
                    <img src="image/logo.png">
                    <div class="video-info">
                        <a href=""> Artificial Intelligence</a>
                        <p>Y.G Tutorials</p>
                        <p>110K views &bull; 3 days ago</p>
                    </div>
                </div>
            </div>

            <div class="video-list">
                <a href=""><img src="image/cyber security.jfif" class="thumbnail"></a>
                <div class="navigation-div">
                    <img src="image/logo.png">
                    <div class="video-info">
                        <a href=""> Cyber Security</a>
                        <p>Y.G Tutorials</p>
                        <p>110K views &bull; 3 days ago</p>
                    </div>
                </div>
            </div>

            <div class="video-list">
                <a href=""><img src="image/ml.jpeg" class="thumbnail"></a>
                <div class="navigation-div">
                    <img src="image/logo.png">
                    <div class="video-info">
                        <a href=""> Machine Learning</a>
                        <p>Y.G Tutorials</p>
                        <p>110K views &bull; 3 days ago</p>
                    </div>
                </div>
            </div>

            <div class="video-list">
                <a href=""><img src="image/robotics.jpg" class="thumbnail"></a>
                <div class="navigation-div">
                    <img src="image/logo.png">
                    <div class="video-info">
                        <a href=""> Robotics</a>
                        <p>Y.G Tutorials</p>
                        <p>110K views &bull; 3 days ago</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- code for video thumbnail ends -->

    </div>
    <!-- code for main content ends -->



    <!-- toggle sidebar starts -->
    <script>
       var menuIcon = document.querySelector(".fa-bars");
       var sidebar = document.querySelector(".sidebar");
       var container = document.querySelector(".container");

       menuIcon.onclick = function()
       {
           sidebar.classList.toggle("collapse-sidebar");
           container.classList.toggle("large-container");
       } 
    </script>
    <!-- toggle sidebar ends -->
</body>
</html>