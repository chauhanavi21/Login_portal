<?php 

session_start();
header('location:index.php');

$con = mysqli_connect('localhost','root');

if($con){
    echo "connection succesful";
} else{
    echo "no connection";
}
 mysqli_select_db($con, 'userdata');

 $name = $_POST['user'];
 $password = $_POST['password'];

 $s = "select * from usertable where name  = '$name'";

 $result = mysqli_query($con, $s);

 $num = mysqli_num_rows($result);

 if($num == 1){
     echo"username already taken";
 }else {
     $reg = " insert into usertable (name, password)
     values ('$name', '$password')";
     mysqli_query($con, $reg);
     echo" registration succesful";
 }

?>