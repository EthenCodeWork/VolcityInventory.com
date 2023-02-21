<?php require 'SolarMax\inc\_classes\server.php'; ?>
<?php 



$username = "";
$email    = "";
$errors = array(); 


if(isset($_POST['loginbtn'])){

    $username = htmlspecialchars(mysqli_real_escape_string($con, $_POST['username']));
    $password = htmlspecialchars(mysqli_real_escape_string($con, $_POST['password']));
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    
    
    if (count($errors) == 0) {
        $query = "SELECT * FROM users WHERE username='$username'";
        $results = mysqli_query($con, $query);
        if (mysqli_num_rows($results) == 1) {
            while($result = mysqli_fetch_assoc($results)) {
                if(password_verify($password, $result['password'])) {
                    session_start();
                    $_SESSION['logged_id'] = $result['id'];
                    $_SESSION['firstname'] = $result['firstname'];
                    $_SESSION['lastname'] = $result['lastname'];
                    $_SESSION['email'] = $result['email'];
                    $_SESSION['admin'] = $result['admin'];
                    $_SESSION['username'] = $username;
                    $_SESSION['success'] = "You are now logged in";
                    $redirect = '/dashboard.php';
                    echo "<script>window.location = '$redirect';</script>";
                    return $redirect;
                }
            }
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
};








?>
