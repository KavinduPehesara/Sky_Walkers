<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$conn=mysqli_connect("localhost","id15443406_skywakers","?H9K?ojB0ssx!)HI","id15443406_skywalkers");

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql = "insert into r_data(f_name,l_name,email,comment)
values('$fname','$lname','$email','$comment')";

if ($conn->query($sql) === TRUE){
    echo "Added : ".$fname.",".$lname.",".email.",".comment;
} else{
    echo "Error : ".$sql."<br>".$conn->error;
}

$conn-close();

?>