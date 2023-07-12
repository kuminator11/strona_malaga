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
        <form action = 'player-form-redirect.php' method = 'get'>
        
        
        <span id="fname-span">First name</span>
        <input type = 'text' name="fname" id = 'fname' required>
        
        
       
        <span id="fsname-span">First surname</span>
        <input type = 'text' name="fsname" id = 'fsname' required>
        
        
        
        <span id="ssname-span">Second surname</span>
        <input type = 'text' name="ssname" id = 'ssname'>
        
        
        
        <span id="username-span">Username</span>
        <input type = 'text' name = 'username' id = 'username' required>
        
        
        
        <span id="pwd-span">Password</span>
        <input type = 'password' name = 'pwd' id = 'passwd' required>
        
        
       
        <span id="email-span">Email</span>
        <input type = 'email' name="email" id = 'email' required> 
       
        
        
        <span id="date-span">Nickname</span>
        <input type = 'date' name="birthdate" id = 'birthdate' value="" required>   


        <input type = 'text' name="apodo" id = 'nickname' > 
        <span id="apodo-span">Birthdate</span>

        <span id="sex-span">Select your sex</span>
        <select class="sex" name="sex" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="other">Other</option>
        <option value="dont-tell">I'd rather not tell</option>
        </select>
        <button type="submit" class="submit-finish">Next</button>

        </form>
        
        <a href = 'login.php' id="back">Back</a>
        </section>

<script src = "script.js"></script>
</body>
</html>