<?php 
error_reporting(0);
// session_start();
$siteTitle = "www.faculty.com |welcome to skit";
$siteURL = "http://".$_SERVER['HTTP_HOST']."/skit_fawithfork/www.skit_admin.com/admin.php";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'booking';
$conn =  mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
	echo"database connection error";
}
?>