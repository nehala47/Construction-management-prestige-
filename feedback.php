<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prestige";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$a=$_POST['username'];
$b=$_POST['email'];
$c=$_POST['feedback'];
$d=$_POST['phone'];


$sql = "INSERT INTO `feedback` (`name`, `email`, `feedback`, `phone`) VALUES ('$a', '$b', '$c', '$d')";

if (mysqli_query($conn, $sql)) {
		echo '<script language="javascript">';
		echo 'alert("Thank you for your feedback..:)")';
		echo '</script>';
		echo '<script language="javascript">';
		echo 'window.location="home.html"';
		echo '</script>'; 

} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
