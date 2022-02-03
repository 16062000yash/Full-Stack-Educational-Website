<?php

$server = 'localhost';
$username= 'root';
$password= '';
$database= 'user';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo"";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $sql = "INSERT INTO `register`( `Name`, `Email`, `Password`, `Cpassword`, `phone_no`) VALUES ('$name', '$email', '$password', '$cpassword', '$number')";    
    if(mysqli_query($conn, $sql)){
        echo "Records entered Successfully.";
    }else{
        echo "ERROR: Could not able to execute $sql.", mysqli_error($conn);
        }
}

session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM register WHERE Email='$email' AND Password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){        
        header("location:rdashboard.php");
        
    }
    else{
        $error='emailid or password is incorrect';
    }
}

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM register WHERE Email='yashgoyal16062000@gmail.com' AND Password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1){        
        header("location:dashboard.php");
        
    }
    else{
        $error='emailid or password is incorrect';
    }
}

if(isset($_POST['submit1'])){
    $cname=$_POST['cname'];
    $cdesc=$_POST['cdesc'];
    $price=$_POST['price'];
    $pos=$_POST['pos'];
    $pos1=$_POST['pos1'];
    $dur=$_POST['dur'];
    $mod=$_POST['mod'];
    $time=$_POST['time'];

    $job= "INSERT INTO `course`(`Course_name`, `Course_desc`, `Price`, `Total_seats`, `Seats_available`, `Duration`, `Modules`, `Time`) VALUES ('$cname','$cdesc','$price','$pos','$pos1','$dur','$mod','$time')";
    if(mysqli_query($conn,$job)){
        echo"New Course Posted";
    }
    else{
        echo"Failed to Post the Course $sql.", mysqli_error($conn);
    }
}
if(isset($_POST['apply'])){
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $sqli= "INSERT INTO `candidates applied`(`Rname`, `Applying`, `Branch`, `Year`) VALUES ('$name','$qual','$branch','$year')";
    mysqli_query($conn,$sqli);
}

if(isset($_POST['Submit'])){
    $name=$_POST['Name'];
    $email=$_POST['Sender'];
    $number=$_POST['Contact'];
    $message=$_POST['Message'];

    $conf = "INSERT INTO contact_form( `Name`, `Email`, `Contact_Number`, `Message`) VALUES ('$name', '$email', '$number', '$message')";
    mysqli_query($conn,$conf);
    $msg= "Thanks for response";  
}

if(isset($_POST['subscribe'])){
    $email=$_POST['email'];

    $conf = "INSERT INTO emailsubscriber( `Email`) VALUES ('$email')";
    mysqli_query($conn,$conf);
    $msg= "Thanks for response";  
}

if(isset($_POST['Feed'])){
    $sname=$_POST['sname'];
    $cname=$_POST['cname'];
    $feedback=$_POST['feedback'];
    $ratings=$_POST['ratings'];

    $conf = "INSERT INTO feedback(`Student_Name`, `Course_name`, `Feedback`, `Ratings`) VALUES ('$sname','$cname','$feedback','$ratings')";
    mysqli_query($conn,$conf);
    $msg= "Thanks for response";  
}

if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email=$_POST['uemail'];
    $password=$_POST['password'];
    $upassword=$_POST['upassword'];
    $ucontact=$_POST['ucontact'];

    $conf = "UPDATE `register` SET `Name`='$name',`Email`='$email',`Password`='$upassword',`phone_no`='$ucontact' WHERE Name='$name' AND Password='$password'";
    $sql = "UPDATE `contact_form` SET `Name`='$name',`Email`='$email',`Contact_Number`='$ucontact' WHERE Name='$name'";
    mysqli_query($conn,$conf,$sql);
    $msg= "Your data is updated";  
}

if(isset($_POST['change'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $npassword=$_POST['npassword'];
    
    $conf = "UPDATE `register` SET `Password`='$password',`Cpassword`='$npassword' WHERE Email='$email' Name='$name'";
    mysqli_query($conn,$conf,$sql);
    $msg= "Your Password is Changed Successfully";
}

if(isset($_POST['Response'])){
    $name=$_POST['name'];
    $response=$_POST['response'];

    $sql = "INSERT INTO `contact_form`(`Name`, `Response`) VALUES ('$name','$response')";
    mysqli_query($conn,$sql); 
}
?>