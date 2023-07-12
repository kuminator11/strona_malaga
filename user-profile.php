<?php 
    session_start();
    include('load_profile.php');
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
                <li><a href='personal-information.php'> <i class="fa-solid fa-pen"></i> Edit your profile</a></li>
            </ul>
        </nav>
    </div>
    <div class="profile-container">
    <div class="info">
            
    <form action="update_profile.php" method="get">
        <label>First name
            <?php echo "<input type = 'text' name='fname' class = 'input' placeholder='".$_SESSION['name']."' readonly>"; ?>
    </label>
        
    
    <label>First surname
        <?php echo "<input type = 'text' name='fsname' class = 'input' placeholder='".$_SESSION['surname']."' readonly>"; ?>
    </label>
    
    
    <label>Second surname
        <?php echo "<input type = 'text' name='ssname' class = 'input' placeholder='".$_SESSION['surname2']."' readonly>"; ?>
    </label>
        
    <label>Social media
        <?php echo "<input type = 'text' name='rrss' class = 'input' placeholder='".$_SESSION['social_media']."' readonly>"; ?>
    </label>
    
        
    <label>Email address
        <?php echo "<input type = 'email' name='email' class = 'input' placeholder='".$_SESSION['email']."' readonly>"; ?>
    </label>
    
    <label>Birthdate
        <?php echo "<input type = 'text' name='birthdate' class = 'input' placeholder='".$_SESSION['birth_date']."' readonly>"; ?>
    </label>
    
    
    <label>Player's nickname
        <?php echo "<input type = 'text' name='apodo' class = 'input' placeholder='".$_SESSION['nickname']."' readonly>"; ?>
    </label>
    
    <label>Federation
        <?php echo "<input type = 'text' name='federando' class = 'input' placeholder='".$_SESSION['federation']."' readonly>"; ?>
    </label>
    
    <label>Club name
        <?php echo "<input type = 'text' name='club' class = 'input' placeholder='".$_SESSION['club_name']."' readonly>"; ?>
    </label>
    
    <label>Player's category
        <?php echo "<input type = 'text' name='categoria' class = 'input' placeholder='".$_SESSION['category_type']."' readonly>"; ?>
    </label>
   
    <label>Player's class
        <?php echo "<input type = 'text' name='class' class = 'input' placeholder='".$_SESSION['class_type']."' readonly>"; ?>
    </label>
    
    <label>Date of begin
        <?php echo "<input type = 'text' name='start-date' class = 'input' placeholder='".$_SESSION['start_date']."' readonly>"; ?>
    </label>
    
    <label>Date of end
        <?php echo "<input type = 'text' name='end-date' class = 'input' placeholder='".$_SESSION['end_date']."' readonly>"; ?>
    </label>
    
    <label>Player's weight
        <?php echo "<input type = 'number' step='any' name='weight' class = 'input' placeholder='".$_SESSION['weight']."' readonly>"; ?>
</label>
    
   
    <label>Player's height
        <?php echo "<input type = 'number' step='any' name='height' class = 'input' placeholder='".$_SESSION['height']."' readonly>"; ?>
    </label>
    
    <label>T-shirt size
        <?php echo "<input type = 'number' step='any' name='height' class = 'input' placeholder='".$_SESSION['tshirt_size']."' readonly>"; ?>
    </label>
    
    <label>Pants size
    <?php echo "<input type = 'number' step='any' name='pantalone' class = 'input' placeholder='".$_SESSION['pants_size']."' readonly>"; ?>
</label>
    

<label>Foot size
    <?php echo "<input type = 'number' step='any' name='pie' class = 'input' placeholder='".$_SESSION['shoe_size']."' readonly>"; ?>
</label>
</form>
</div>  

    

</div>

</section>



</section>  
</body>
</html>