<?php
$insert=false;
if(isset($_POST['Name']) && $_POST['Name'] != ""){
    $submit=true;
    $server = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "summer_internship_db";

    $con = mysqli_connect($server, $username, $password, $database);

    if(!$con){
        die("connection failed " . mysqli_connect_error());
    }

    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `internship` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `query`, `date_time`) 
    VALUES ('$Name', '$Age', '$Gender', '$Email', '$Phone', '$desc', current_timestamp())";

    if(mysqli_query($con, $sql)){
        // echo "Successfully inserted";
        $insert=true;
    }
    else{
        echo "ERROR: " . mysqli_error($con);
    }
    $con->close();
}
else{
    echo "Please submit the form first";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to internship form submission</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class= "container">
        <h1> Welcome TO Summer Internship Form</h1>
        <p> Fill the application form for summer internship</p>
        <?php
        if($insert==true){
            echo "<p class='submitmsg'>Thanks for submiting your form</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="Name" id="name" placeholder="enter your name ">
            <input type="text" name="Age" id="age" placeholder="enter your age ">
            <input type="text" name="Gender" id="gender" placeholder="enter your gender ">
            <input type="email" name="Email" id="email" placeholder="enter your email">
            <input type="phone" name="Phone" id="phone" placeholder="enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any query here"></textarea>
            <button class="btn" > submit </button>
        </form>
    </div>
    <script src="index.js">
    </script>  
    </body>
</html>