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
                <li><a href='personal-information.php'>  <i class="fa-solid fa-angle-right"></i>Personal information</a></li>
                <li><a href='account-information.php'>  <i class="fa-solid fa-angle-right"></i>Account information</a></li>
                <li><a href='club-information.php'>  <i class="fa-solid fa-angle-right"></i>Club information</a></li>
            </ul>
        </nav>
    </div>
    <div class="profile-container">
    <div class="info">
    <form action="pi_update_profile.php" method="get">
        <h3>Personal information</h3>
        
        <label>First name
            <?php echo "<input type = 'text' name='fname' class = 'input' value='".$_SESSION['name']."' readonly>"; ?>
            </label>
            

<label>First Surname
    <?php echo "<input type = 'text' name='fsname' class = 'input' value='".$_SESSION['surname']."' readonly>"; ?>
</label>

<label>Surname
    <?php echo "<input type = 'text' name='ssname' class = 'input' value='".$_SESSION['surname2']."' readonly>"; ?>
    </label>

    <!-- <div class="label">Second surname
        <p id="ssname" class="input"></p>
    </div> -->
    
    <label>Birthdate
        <?php echo "<input type = 'text' name='birthdate' class = 'input' value='".$_SESSION['birth_date']."' readonly>"; ?>
    </label>
    <!-- <div class="label">Birthdate
        <p id="birthdate" class="input"></p>
    </div>
-->
<label>Address
    <?php echo "<input type = 'text' name='address' class = 'input' value='".$_SESSION['address']."' readonly>"; ?>
</label>

<!-- <div class="label">Player's address
    <p id="address" class="input"></p>
</div> -->

<label>Weight
    <?php echo "<input type = 'number' step='any' name='weight' class = 'input' value='".$_SESSION['weight']."' readonly>"; ?>
</label>
<!-- <div class="label">Player's weight
    <p id="weight" class="input"></p>
</div>
-->
<label>Height
    <?php echo "<input type = 'number' step='any' name='height' class = 'input' value='".$_SESSION['height']."' readonly>"; ?>
</label>

<!-- <div class="label">Player's height
    <p id="height" class="input"></p>
</div> -->

<label>T-shirt size
    <?php echo "<input type = 'number' step='any' name='camiseta' class = 'input' value='".$_SESSION['tshirt_size']."' readonly>"; ?>
</label>

<!-- <div class="label">T-shirt size
    <p id="tshirt-size" class="input"></p>
</div> -->
<label>Pants size
    <?php echo "<input type = 'number' step='any' name='pantalone' class = 'input' value='".$_SESSION['pants_size']."' readonly>"; ?>
</label>
<!-- <div class="label">Pants size
    <p id="pants-size" class="input"></p>
</div> -->

<label>Foot size
    <?php echo "<input type = 'number' step='any' name='pie' class = 'input' value='".$_SESSION['shoe_size']."' readonly>"; ?>
</label>

<!-- <div class="label">Foot size
    <p id="foot-size" class="input"></p>
</div> -->

<label>Sex
    <!--<select name="sex">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="other">Other</option>
        <option value="dont-tell">I'd rather not tell</option>
    </select>-->
    <?php echo "<input type = 'text' name='sex' class = 'input' value='".$_SESSION['sex']."' readonly>"; ?>
</label>

<!-- <div class="label">Players sex
    <p id="sex" class="input"></p>
   </div> -->

<label>Phone number
<?php echo "<input type = 'tel' name='tel' class = 'input' value='".$_SESSION['phone']."' readonly>"; ?>
</label>

<!-- <div class="label">Phone number
    <p id="phone-number" class="input"></p>
</div> -->

<label>Social media
    <?php echo "<input type = 'text' name='rrss' class = 'input' value='".$_SESSION['social_media']."' readonly>"; ?>
</label>
<!-- 
    <div class="label">Social media
        <p id="social-media" class="input"></p>
    </div> -->
    
    
    <label>Email address
        <?php echo "<input type = 'email' name='email' class = 'input' value='".$_SESSION['email']."' readonly>"; ?>
    </label>
    
    <!-- <div class="label">Email address
        <p id="email" class="input"></p>
    </div> -->
    <button type="submit" id='save'>Save <i class="fa-solid fa-check"></i></button>
</form>
</div>      
<button type="submit" id="edit">Edit  <i class="fa-solid fa-pen"></i></button>
</div>

</section>


</section>

<script src ='edit-info.js'></script>
</body>
</html>