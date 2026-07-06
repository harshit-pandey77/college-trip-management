<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "trip";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM trip";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>

    <style>

    table{
        width:100%;
        border-collapse:collapse;
    }

    th,td{
        border:1px solid black;
        padding:10px;
        text-align:center;
    }

    th{
        background:#4CAF50;
        color:white;
    }

    img{
        width:80px;
        height:80px;
        border-radius:50%;
    }

    </style>

</head>

<body>

<h2 align="center">Student Details</h2>

<table>

<tr>

<th>S.No</th>
<th>Name</th>
<th>Email</th>
<th>Age</th>
<th>Gender</th>
<th>Photo</th>
<th>State</th>
<th>City</th>
<th>Hobbies</th>
<th>Other</th>
<th>Date</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['Sno']; ?></td>

<td><?php echo $row['Name']; ?></td>

<td><?php echo $row['Emails']; ?></td>

<td><?php echo $row['Age']; ?></td>

<td><?php echo $row['Gender']; ?></td>

<td>

<img src="uploads/<?php echo $row['Photo']; ?>">

</td>

<td><?php echo $row['State']; ?></td>

<td><?php echo $row['City']; ?></td>

<td><?php echo $row['Hobbies']; ?></td>

<td><?php echo $row['Other']; ?></td>

<td><?php echo $row['dt']; ?></td>

</tr>

<?php

}

?>

</table>

</body>
</html>