<?php session_start(); ?>
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
                    #header('location: control-panel.php');
                }
                else{
                    #header('location: user-profile.php');
                }
                echo "<a href='logout.php'>Logout</a>";
            }
            else{
                echo '<li><a href = "login.php">Class</a></li>';
            }
        ?>
    </ul>
    </nav>
    
    <a href = "register-form.php"  class="register-btn">
    <span> Quiero Aprender</span>
    </a>
    </header>


    <section class="player-register-form">
    <div class="progress">
    <div class = 'progress-bar'></div>
    <!-- <ul class="step-bar">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    </ul> -->
    </div> 
    <form action = 'player-form3-redirect.php' method = 'get'>
        
        
        <span id="weight-span">Your weight</span>
        <input type = 'number' step="any" name="weight" id = 'weight'>
        
        
       
        <span id="height-span">Your Height</span>
        <input type = 'number' step="any" name="height" id = 'height'>
        
        
        <span id="tshirt-span">T-shirt size</span>
        <input type = 'number' step="any" name="camiseta" id = 'tshirt'>
        
        
        <span id="pants-span">Pants size</span>
        <input type = 'number' step="any" name="pantalone" id = 'pants'>
        
        
        
        <span id="foot-span">Foot size</span>
        <input type = 'number' step="any" name="pie" id = 'foot'>
        
        <button type="submit" class="submit-finish">Finish</button>
        </form>
        <!-- <a href = 'player-form3.html' id="next">Finish</a> -->
        <a href = 'player-form2.php' id="back">Back</a>
        
    
    </section>

</body>
</html>