<?php 
include('config.php');
$msg="";
?>
<!DOCTYPE html>
<html>

<head>
        <title>contact us </title>
        <link href="contact.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/e7dad6912e.js" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta name="description" content="this is a test">
        <meta name="keywords" content="web devlopment">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>

<body>
        <section class="contact">
                <div class="content">
                        <h2><b>Contact Us</b></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem odio iure cupiditate!
                                Eveniet ratione dolores eaque earum commodi tenetur corporis modi? Aliquid repellendus
                                dicta magni obcaecati? Culpa non quos nam?</p>
                </div>
                <div class="container">
                        <div class="contactinfo">
                                <div class="box">
                                        <div class="icon">
                                                <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="text">
                                                <h3><b>Address</b></h3>
                                                <p>452 Sugar Camp Road,<br>Owatonna,Minnesota,<br>55060</p>
                                        </div>
                                </div>
                                <div class="box">
                                        <div class="icon">
                                                <i class="fa fa-mobile"></i>
                                        </div>
                                        <div class="text">
                                                <h3><b>Phone</b></h3>
                                                <p>7354736992</p>
                                        </div>
                                </div>
                                <div class="box">
                                        <div class="icon">
                                                <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                                <h3><b>Email</b></h3>
                                                <p>en18el301209@medicaps.ac.in</p>
                                        </div>
                                </div>
                                <div class="box">
                                        <div class="icon">
                                                <i class="fa fa-plus-circle"></i>
                                        </div>
                                        <div class="text">
                                                <h3><b>Follow us:</b></h3><br>
                                                <p>
                                                        <i class="fa fa-instagram"></i>
                                                        <i class="fa fa-facebook-official"></i>
                                                        <i class="fa fa-twitter-square"></i>
                                                        <i class="fa fa-linkedin-square"></i>
                                                </p>
                                        </div>
                                </div>
                        </div>
                        <div class="contactform">
                                <form action="" method="POST">
                                        <?php
                                                $userEmail = ""; //first we leave email field blank
                                                $number="";
                                                $name="";
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
                                        <h2>Send Message</h2>
                                        <div class="inputbox">
                                                <input type="text" name="Name" id="Name" required value="<?php echo $name ?>" >
                                                <span>Full Name</span>
                                        </div>
                                        <div class="inputbox">
                                                <input type="text" name="Sender" id="Sender" required value="<?php echo $userEmail ?>">
                                                <span>Email</span>
                                        </div>
                                        <div class="inputbox">
                                                <input type="tel" name="Contact" id="Contact" required value="<?php echo $number ?>">
                                                <span>Contact Number</span>
                                        </div>
                                        <div class="inputbox">
                                                <textarea name="Message" id="Message" required value="<?php echo $message ?>" ></textarea>
                                                <span>Type Your Message Here</span>
                                        </div>
                                        <!-- <input type="submit" class="Send" name="Submit" > -->
                                        <button type="submit" class="Send" name="Submit"> Send</button>
                                        <span style="color: red;"><?php echo $msg?></span>                                                                           
                                </form>
                        </div>
                </div>
        </section>

        <!-- sending copy response and other to our id  of above filled form -->

        <!-- <script type="text/javascript">
                function sendEmail(event) {
                        event.preventDefault();


                        var name = $('#Name').val();
                        var email = $('#Sender').val();
                        var contact = $('#Contact').val();
                        var message = $('#Message').val();

                        var Body = 'Name: ' + name + '<br>Email: ' + email + '<br>Contact: ' + contact + '<br>Message: ' + message;


                        Email.send({
                                Host: "smtp.gmail.com",
                                Username: "yashgoyal16062000@gmail.com",
                                Password: "dqymngsxbdttswbj",
                                To: email,
                                From: "yashgoyal16062000@gmail.com",
                                Subject: "New Mail On Contact Form From Y.G TUTORIALS to" + name,
                                Body: Body
                        }).then((message) => {
                                console.log('mail sent success');
                                alert('sent mail');
                        }).catch((err) => {
                                alert(err);
                                console.log(err);
                        });
                }
        </script> -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>