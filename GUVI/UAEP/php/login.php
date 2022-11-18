<?php

$conn = mysqli_connect('localhost','root','','user_db');


session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

if(isset($_POST['submit'])){
   // $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   // $cpass = md5($_POST['cpassword']);
   // $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
         $_SESSION['user_name'] = $row['name'];
         header('location:/GUVI/UAEP/index.html');
   }else{
     echo 'incorrect email or password!';
   }

};
} else if ($_SERVER('REQUEST_METHOD') ==='GET') {

   session_start();
   session_unset();
   session_destroy();
   
   header('location:login.html');
   
}
?>
