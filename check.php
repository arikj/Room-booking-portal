<?php
$username = $_POST['username'];
$password = $_POST['password'];
$login=$_GET()'login');

if($login=='yes')
{
$con=mysql_connect("localhost","root","arihant");
mysql_select_db("test");
$get=mysql_query("SELECT count(username) FROM userid WHERE user='$username' and pass='$password'");
$result=mysql_result($get,0);
if($result!=1)
 echo "Invalid uername or password";
else
 echo "Welcome" + $username;
}
?>
