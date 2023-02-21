<?php 
require 'SolarMax\inc\_classes\server.php';
$username = "";
$email    = "";
$errors = array(); 
$token = md5(rand(0, 99999));

if(isset($_POST['register_user'])){
    $firstname = htmlspecialchars(mysqli_real_escape_string($con, $_POST['firstname']));
    $lastname = htmlspecialchars(mysqli_real_escape_string($con, $_POST['lastname']));
    $username = htmlspecialchars(mysqli_real_escape_string($con, $_POST['username']));
    $email = htmlspecialchars(mysqli_real_escape_string($con, $_POST['email']));
    $password1 = htmlspecialchars(mysqli_real_escape_string($con, $_POST['password1']));
    $password2 = htmlspecialchars(mysqli_real_escape_string($con, $_POST['password2']));
    $checkboxregister = htmlspecialchars(mysqli_real_escape_string($con, $_POST['terms']));



   // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($checkboxregister)) { array_push($errors, "Check Box needs to be checked."); }
  if (empty($password1)) { array_push($errors, "Password is required"); }
  if ($password1 != $password2) {
	array_push($errors, "The two passwords do not match");
  }

 

   // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($con, $user_check_query);
  if(mysqli_num_rows($result) > 0) {
      array_push($errors, "Username/Email already exists");
  }

  if(count($errors)== false){
    $password = password_hash($password1, PASSWORD_ARGON2ID);
    $query = "INSERT INTO `users`(`id`, `firstname`, `lastname`, `username`, `password`, `email`, `remember_me`, `inventory_number`, `activated`, `admin`) VALUES (NULL ,'$firstname', '$lastname', '$username', '$password', '$email', 'on', '$token', '0','0');";
    mysqli_query($con, $query) or die(mysqli_error($con));
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['email'] = $email;
        $redirect = '/dashboard.php';
        echo "<script>window.location = '$redirect';</script>";
        return $redirect;
         
  }
}



?>