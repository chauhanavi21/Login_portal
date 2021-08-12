<?php 

session_start();
//header('location:index.php');

$con = mysqli_connect('localhost','root');

if($con){
    echo "connection succesful";
} else{
    echo "no connection";
}
 mysqli_select_db($con, 'userdata');

 $name = $_POST['user'];
 $password = $_POST['password'];

 $s = "select * from usertable where name  = '$name' && password = '$password'";

 $result = mysqli_query($con, $s);

// $num = mysqli_num_rows($result);

 if (!$result->num_rows > 0){
     $_SESSION[username] = $name;
     echo "successfill";
    //header('location:home.php');
 }else {
     echo "unseucfull";
    // header('location:index.php');
 }

?>