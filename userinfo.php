<?php
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];
$con =new mysqli('localhost','root','','website');
if($con){
    echo"connection successful";
}else{
    echo "no connection";
}
$sql="INSERT INTO userdata (username,email,mobile,comment) VALUES ('$user','$email','$mobile','$comment')";
if($con->query($sql))
{
    echo "we got it";
    header( 'Location: http://localhost/new/contact.php' ) ;
}
else{
    echo "ERROR ;".$sql."<br>".$con->error;
    
}
$con->close();


?> 