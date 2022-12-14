<html>
<?php 

echo " <h1>Josmain Cleaning  Solution </h1> ";
echo " <h2>Request succesfully submitted for: </h2> ";

$name=$_POST["name"];
echo "$name <br>";  
$email=$_POST["email"];  
echo "Email:, $email <br>";
$phone=$_POST["phone"];
echo "Phone: $phone <br>";
$location=$_POST["location"];
echo "Living in:, $location <br>";
$cServices = $_POST["services"];
$cTime = $_POST["availability"];

echo "<br>";
echo "<b>Services chosen are:</b><br>";
foreach($cServices as $value){
  echo " $value <br>";
}
echo "<br>";
echo "<b>Time available:</b><br>";
echo "$cTime <br>";
echo "<br>";
echo "<b>We thank you for requesting our services ,our cleaning team will   arrive at your inidicated place and contact you with your phone number at the time you indicated you will be available</b><br>";





?> 
<br>
<a href="index.html">Go back home</a> 
<br>
<a href="comment.html">Go and add a comment</a> 
</html>