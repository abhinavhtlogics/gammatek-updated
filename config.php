<?php
$servername ='us-cdbr-east-04.cleardb.com';
$username = 'b8acce74267224';
$password = 'c0a840f2';
$dbname = 'heroku_6ec0bffd7cc734c';

// Create connection
$server_url='https://gammatek-app.herokuapp.com/';
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

 









// Check connection

?>