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
        <li><a href = "login.php" id="class">Class</a></li>
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
                <li><a href='admin-user-edit.php'> <i class="fa-solid fa-user"></i> Profile</a></li>
                <li><a href='admin-personal-information.php'>  <i class="fa-solid fa-angle-right"></i>Personal information</a></li>
                <li><a href='admin-club-information.php'>  <i class="fa-solid fa-angle-right"></i>Club information</a></li>
            </ul>
        </nav>
    </div>
    <div class="profile-container">
    <div class="info">
        
        <h3>Personal information</h3>
        <form action="/" method="get">
            <label>First name
            <input type = 'text' name="fname" class = 'input' readonly>
            </label>

    
       
    <label>First Surname
    <input type = 'text' name="fsname" class = 'input' readonly>
    </label>
    
        
    <label>Surname
    <input type = 'text' name="ssname" class = 'input' readonly>
    </label>

   
               
    <label>Birthdate
    <input type = 'text' name="birthdate"  class = 'input' readonly>   
    </label>
   
    <label>Address
        <input type = 'text' name="address" class = 'input' readonly>
    </label>
   

    <label>Weight
    <input type = 'number' step="any" name="weight" class = 'input' readonly>
</label>

    <label>Height
    <input type = 'number' step="any" name="height" class = 'input' readonly>
</label>


    
    <label>T-shirt size
    <input type = 'number' step="any" name="camiseta" class = 'input' readonly>
</label>
    

    <label>Pants size
    <input type = 'number' step="any" name="pantalone" class = 'input' readonly>
</label>

    
    <label>Foot size
    <input type = 'number' step="any" name="pie" class = 'input' readonly>
</label>


<label>Sex
    <input type = 'text' name="sex" class="input" readonly>
</label>



<label>Phone number
<input type = 'number' name="tel" class="input" readonly>
</label>


<label>Social media
    <input type = 'text' name="rrss" class = 'input' readonly>
    </label>

        
    <label>Email address
    <input type = 'email' name="email" class = 'input' readonly> 
    </label>
</form>
    
    </div>      
<button type="submit" id="edit">Edit  <i class="fa-solid fa-pen"></i></button>
<button type="submit" id='save'>Save <i class="fa-solid fa-check"></i></button>
</div>

</section>


</form>
</section>

<script src ='admin-info-edit.js'></script>
</body>
</html>