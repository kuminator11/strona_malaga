<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href = "css/main.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0d84a0dd17.js" crossorigin="anonymous"></script>
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
                    #header('location: control-panel.php');
                }
                else{
                    #header('location: user-profile.php');
                }
                echo "<a href='logout.php'>Logout</a>";
            }
            else{
                echo '<li><a href = "login.php">Class</a></li>';
                header('location: login.php');  
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
   <h5>Control Panel</h5>
</div>
</section>

<section class="panel">
    
    <form action ='search_users.php' method = 'get'>
    <input type="text" placeholder="Search for user" name='phrase'>
    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
    <div class="user-box">
    <?php
        if(isset($_SESSION['found_users'])){
            for($x=0;$x<count($_SESSION['found_users']);$x++){
                echo "<div class='user-field'><p><span> name: ".$_SESSION['found_users'][$x][0]."</span></p><p><span> email: ".$_SESSION['found_users'][$x][1]."</span></p><p><span> phone: ".$_SESSION['found_users'][$x][2]."</span></p><p><span> class: ".$_SESSION['found_users'][$x][3]."</span></p><p><span> rank: ".$_SESSION['found_users'][$x][4]."</span></p></div>";
            }
        }
        elseif(isset($_SESSION['found_users']) == false){
            echo "<a>test</a>";
            echo "<div class='user-field'><p><span>name:</span> ".$_SESSION['found_users'][$x][0]."</p><p><span> email: ".$_SESSION['found_users'][$x][1]."</span></p></div>";
        }
    ?>
    </div>

</section>


<script src ='panel.js'></script>
</body>
</html>