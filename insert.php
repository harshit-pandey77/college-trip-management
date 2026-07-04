<?php

    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password, "trip");
    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['submit'])){

        
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $age = $_POST['age']; 
        $gender = $_POST['gender']; 
        $other = $_POST['other']; 
        $sql = "INSERT INTO `trip` (`Name`, `Emails`, `Age`, `Gender`, `Other`, `dt`) VALUES
         ('$name', '$email', '$age', '$gender', '$other', current_timestamp());";
    

    if($conn->query($sql) == true){
        echo "Successfully inserted";
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }
        $conn->close();
    }


    ?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.png" alt="KNIPSS Faridipur">
    <div class="container">
        <h1>Welcome to KNIPSS Us Trip form</h1>
        <p>Please fill out the form below to book your trip and confirm your participation on this trip.</p>
        <p class="submitMsg">Thanks for submitting your form. We are happy to see you joining us for the US trip.</p>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="number" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>   
            <button class="btn" name="submit" type="submit">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
   
</body>
</html>