    <?php
        session_start();
        include('load_profile.php');
        include('functions.php');
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

    <div id="profile-container-account">
    <div class="info">
    <form action="update_password.php" method="get">
        <h3>Account information</h3>
        <label>Player's username
            <?php echo "<input type='text' name='username' class='input' value='".$_SESSION['user']."' readonly>"; ?>
        </label>
        
        
        <label>Old password
            <input type = 'password' name = 'oldpwd' class = 'input' readonly> 
        </label>
        
        <label>New password
            <input type = 'password' name = 'newpwd' class = 'input' readonly>
        </label>
        
        <label>Repeat new password
            <input type = 'password' name = 'new2pwd' class = 'input' readonly>
    </label>
    
    
    
    <label>Player's Photo
        <input type = 'file' class = 'input' id="image-input" accept="image/png, image/jpeg, image/jpg">
        <div class="upload-button">Upload file<i class="fa-solid fa-circle-arrow-up"></i></div>
    </label>

</div>
<button type="submit" id="save">Save <i class="fa-solid fa-check"></i></button>

</form>

<button type="submit" id="edit">Edit <i class="fa-solid fa-pen"></i></button>



</div>

</section>

</section>

<script src ='image-edit.js'></script>
<script src ='edit-info.js'></script>
</body>
</html>