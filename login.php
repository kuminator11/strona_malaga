<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href = "css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    
<section class = 'above-header-info'>
    <h1 class="info-left">Escuela de Pádel en Málaga desde 2005.</h1>
    <h1 class="info-right">605 07 46 36 | info@padelsportacademy.com</h1>
</section>
<header>
<div class = 'logo'>

    <figure> 
        <img src="img/logo.png">
    </figure>
</div>
<div class = 'burger'></div>
<nav class ='navbar'>
    <ul>
        <li><a href = '#'>Inicio</a></li>
        <li><a href = '#'>Quienes Somos</a></li>
        <li><a href = '#'>Blog</a></li>
        <li><a href = '#'>Contacto</a></li>
        <?php
            if(isset($_SESSION['user']) && isset($_SESSION['user_rank'])){
                echo "<a href='user-profile.php'>".$_SESSION['user']."</a>";
                if($_SESSION['user_rank'] == 'admin'){
                    echo "<a href='control-panel.php'>Panel</a>";
                    header('location: control-panel.php');
                }
                else{
                    header('location: user-profile.php');
                }
                echo "<a href='logout.php'>Logout</a>";
            }
            else{
                echo '<li><a href = "login.php">Class</a></li>';
            }
        ?>
    </ul>
</nav>
<a href = '#'  class="register-btn">
<span> Quiero Aprender</span>
</a>
</header>

<section class = 'login-form'>
<div class="section-header">
   <h5> Class </h5>
</div>


<form action="login_user.php" method="get" class="form">
    <h3>Log in to your account</h3>
    <?php
        if(isset($_GET['status'])){
            if($_GET['status'] == 'wrong_password'){
                echo "<a style='color:red'>Wrong password</a>";
            }
            elseif($_GET['status'] == 'success'){
                echo "<a style='color:green'>Success</a>";
            }
            elseif($_GET['status'] == 'user_not_found'){
                echo "<a style='color:red'>User not found</a>";
            }
            elseif($_GET['status'] == 'username_taken'){
                echo "<a style='color:red'>Username taken</a>";
            }
            elseif($_GET['status'] == 'error'){
                echo "<a style='color:red'>Error</a>";
            }
            else{
                echo "<a style='color:blue'>".$_GET['status']."</a>";
            }
        }
    ?>
    <input type="text" name="username" placeholder="Username" id="username">
    
    <input type="password" name="password" placeholder="Password" id="password">
    <input type="submit" name='submit' class="submit">
    <p> <a href = "player-form.php">Can't login? Create an account</a></p>
</form>
</section>


</body>
</html>