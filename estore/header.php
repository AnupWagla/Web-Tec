
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estore</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div id="header">
<div id="logo">
    <a href="../index.html">
        <img src="./images/logo.webp" alt="Estore">
    </a>
</div>
    <div id="navbar">
        <a href="index.php">Home</a>
        <a href="product.php">Product</a>
        <a href="#">Contact</a>
    </div>
    <?php if(!empty($_SESSION['user'])){ ?>
        <div id="account">
            <a href="logout.php">Logout</a>
        </div>
        <?php }else{ ?>
    <div id="account">
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </div>
    <?php } ?>
   </div> 