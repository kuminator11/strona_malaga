<?php
    session_start();
    include('load_profile.php');
    get_user_cred();
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
   <h5>Profile</h5>
</div>

<section class = 'user-profile'>    
    <div class="profile-nav">

        <div class="image-box">
            <div id="image">
            <?php
            echo "<img style='width:100%;height:30vh;border-radius:18px;' src='files/".$_SESSION['user'].".jpeg'>";
            ?>
            </div>
        </div>

        <nav>
            <ul>
                <li><a href='user-profile.php'> <i class="fa-solid fa-user"></i> Profile</a></li>
                <li><a href='personal-information.php'> <i class="fa-solid fa-angle-right"></i>Personal information</a></li>
                <li><a href='account-information.php'> <i class="fa-solid fa-angle-right"></i>Account information</a></li>
                <li><a href='club-information.php'> <i class="fa-solid fa-angle-right"></i>Club information</a></li>
            </ul>
        </nav>
    </div>
    <div id="profile-container-club">
    <div class="info">
        
        
        <h3>Club information</h3>
        <form action="club_update_profile.php" method="get">
            <label>Club name
                <?php echo "<input type='text' name='club' class='input' value='".$_SESSION['club_name']."' readonly>"; ?>
            </label>
            <!-- <div class="label">Club name
                <p id="club-name" class="input"></p>
            </div> -->
            
            <label>Nickname
            <?php echo "<input type='text' name='apodo' class='input' value='".$_SESSION['nickname']."' readonly>"; ?>
        </label>
        
        <!-- <div class="label">Player's nickname
            <p id="nickname" class="input"></p>
        </div> -->
        
            <label id="federation">Federation
                <?php echo "<input type='text' name='federando' class='input' value='".$_SESSION['federation']."' readonly>"; ?>
            </label>
            
            <!-- <div class="label">Federation
                <p id="federation" class="input"></p>
            </div> -->
            
            <label>Category
                <?php echo "<input type='text' name='categoria' class='input' value='".$_SESSION['category_type']."' readonly>"; ?>
            </label>
            
            <!-- <div class="label">Player's category
                <p id="category" class="input"></p>
            </div> -->
            
            <label>Class
                <?php echo "<input type='text' name='class' class='input' value='".$_SESSION['class_type']."' readonly>"; ?>
            </label>

            <!-- <div class="label">Player's class
                <p id="class" class="input"></p>
            </div> -->
            
            <label>Begin date
            <?php echo "<input type='text' name='start-date' class='input' value='".$_SESSION['start_date']."' readonly>"; ?>
            </label>

            <!-- <div class="label">Date of begin
                <p id="begin-date" class="input"></p>
            </div> -->
               
            <label>End date
            <?php echo "<input type='text' name='end-date' class='input' value='".$_SESSION['end_date']."' readonly>"; ?>

        </label>
        <button type="submit" id="save">Save <i class="fa-solid fa-check"></i></button>
    </form>
    
    <!-- <div class="label">Date of end
        <p id="end-date" class="input"></p>
    </div>
-->
</div>  
<button type="submit" id="edit">Edit  <i class="fa-solid fa-pen"></i></button>
        
        
    </div>
    
</section>


</section>

<script src ='edit-info.js'></script>
</body>
</html>