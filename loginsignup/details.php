<?php
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$company = $_POST['company'];
$domain = $_POST['domain'];
$website_type = $_POST['website_type'];
$comment = $_POST['comment'];
$con =new mysqli('localhost','root','','webdetails');
if($con){
    echo"connection successful";
}else{
    echo "no connection";
}
$sql="INSERT INTO webtype (user,email,mobile,company,domain,website_type,comment) VALUES ('$user','$email','$mobile','$company','$domain','$website_type','$comment')";
if($con->query($sql))
{
    echo ">we got it";
    header( 'Location: http://localhost/webdevelopers/loginsignup/details.html' ) ;
}
else{
    echo "ERROR ;".$sql."<br>".$con->error;
    
}
$con->close();


?> 