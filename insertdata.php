<?php

$conn=mysqli_connect("localhost:3306",'root','',"stud_data");
if(!$conn){
    die('Could not connect:'.mysqli_error());
}
else{
    echo "connected successfully";
}

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];

/*$sql1="CREATE TABLE student1 (
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) PRIMARY KEY)";
$q=mysqli_query($conn,$sql1);
$sql="INSERT INTO student1 (firstname,lastname,email) VALUES('$fname','$lname','$email')";
$q1=mysqli_query($conn,$sql);*/

$conn->close();


/*

if($q1){
    echo "data inserted";

}
else{
    echo "not inserted";*/
?>