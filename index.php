<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $sql= "SELECT * FROM candidates applied WHERE Applying = 'PHP' ";       
    $result = mysqli_query($conn,$sql); 
    $i=0;
    if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
            $b = ++$i;
        }
    echo"
    <h1> $b</h1>";
    $m= "UPDATE chart2 SET no_students = $b WHERE Domain = 'PHP'";
    $result=mysqli_query($conn,$m);
    }
    else{
        echo"";
    }
?>
</body>
</html>
