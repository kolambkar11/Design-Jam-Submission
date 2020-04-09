 <?php
//database connection
function connect()
{
 $con = mysqli_connect("localhost","root","","ysl");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
return $con;
}
?>