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
    <form action = 'player-form2-redirect.php' method = 'get'>
        
        
        <span id="tel-span">Phone number</span>
        <input type = 'tel' name="tel" id = 'tel' required>
        
        
       
        <span id="address-span">Addres</span>
        <input type = 'text' name="address"  id = 'address'>
        
        
        
        <span id="RRSS-span">Social media link</span>
        <select class="rrss-select" name="rrss" id="rrss"  multiple required>
            <option value="Facebook">Facebook</option>
            <option value="Instagram">Instagram</option>
            <option value="Twitter">Twitter</option>
            <option value="Whatsapp">Whatsapp</option>
            <option value="Youtube">Youtube</option>
            </select>
        
        
        <span id="federando-span">Federation</span>
        <input type = 'text' name = 'federando' id = 'federando'>
        
        
        
        <span id="club-span">Club name</span>
        <input type = 'text' name = 'club' id = 'club'>
        
        
       
        <span id="categoria-span">Category type</span>
        <input type = 'text' name="categoria" id = 'category' disabled> 
       
        
        
        <span id="class-span">Class type</span>
        <input type = 'text' name="class" id = 'class' disabled>   
        

        <span id="start-date-span">Date of start</span>
        <input type = 'date' name="start-date"  id = 'start-date'>

        <span id="end-date-span">Date of end</span>
        <input type = 'date' name="end-date" id = 'end-date'>
       
        <button type="submit" class="submit-finish">Next</button>


        </form>
        <!-- <a href = 'player-form3.html' id="next">Next</a> -->
        <a href = 'player-form.php' id="back">Back</a>
    
    
    </section>

</body>
</html>