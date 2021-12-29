<?php
$insert = false;
if(isset($_POST['name'])){
    //Set connectivity 
    $submit=true;
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database failde due to" . mysqli_connect_error());
    }
    // echo "Success connectiong to the db";
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['other'];
$sql = "INSERT INTO `US_Trip`.`tri8` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql;
if($con->query($sql) == true){
  //  echo "Successfully Executed";
  $insert = true;
}else{
    echo "ERROR:$sql <br> $con->error";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="sdd.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
</head>
<body>
    <img class="bg" src="IIT Tirupati.jpeg" alt="IIT Tirupati">
    <div class="container">
        <h1>Welcome to IIT Tirupati US Travel Form </h1>
        <p>Enter your details and Submit this form to confirm your Participation in the trip</p>
        <?php
        if($insert==true){
        echo "<p class='SubmitMsg'>Thanks for Submitting your form.We are happy to see you joining us for the Us trip.</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any Info"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>

