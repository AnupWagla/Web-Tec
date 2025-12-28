<?php
// require_once "database.php";
// session_start();
// $email = $_POST["email"];
// $password =$_POST["password"];

// $hashed_password = password_hash($password, PASSWORD_DEFAULT);
// $query = "select * from users where email ='$email'";
// $res = mysqli_query($db_connection, $query);
// $count = mysqli_num_rows($res);

// if($count == 1){
//     $row = mysqli_fetch_assoc($res);
//     if(password_verify($password, $row['password'])){
//         $_SESSION['user'] = $row['name'];
//         header("Location: dashboard.php");
//     }
//     else {
//         echo "wrong password !";  
//     }
// }
// else{
//     echo"Invalid username or password";
// }
?>
<?php
require_once "database.php";
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$query = "SELECT * FROM users WHERE email='$email'";
$res = mysqli_query($db_connection, $query);

if(mysqli_num_rows($res) === 1){
    $row = mysqli_fetch_assoc($res);

    if(password_verify($password, $row['password'])){
        $_SESSION['user'] = $row['name'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "wrong password!";
    }
} else {
    echo "Invalid username or password";
}
?>


