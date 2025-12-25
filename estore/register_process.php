<?php 
if(isset($_POST)){
    $name = $phone = $email = $password = "";
    if(isset($_POST["full_name"]) & !empty($_POST["full_name"])){
        $name = $_POST["full_name"];
    }
    else{
        echo "please enter a full name";
    }
}else{
    header("Location: register.php");
}
?>