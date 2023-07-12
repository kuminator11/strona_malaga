<?php
    session_start();
    require_once('./conn.php');
    include('functions.php');

    function user_existance($username){
        $insert = "SELECT `usuario` FROM `jugador`";
        $query = mysqli_query($GLOBALS['conn'], $insert);
        while($row = mysqli_fetch_assoc($query)){
            if($row['usuario'] == $username){
                return 'found';
            }
        }
        return 'not found';
    }


    function register($name, $surname1, $surname2, $birth_date, $phone, $email, $address, $sex, $user, $social_media, $federation, $weight, $height, $shirt_size, $short_size, $shoe_size, $club_name, $categoria_id, $class_level_id, $start_date, $end_date, $username, $password){
        $check_username = user_existance($username);
        $password_hash = generate_hash($password);
        if($check_username == 'not found'){
    
            $insert = "INSERT INTO `jugador`(`jugdaor_id`,
             `foto`, `nombre`, `apellido_uno`, `apellido_dos`,
              `fecha_nac`, `numero_de_tel`, `email`, `direccion`,
               `sexo`, `apodo`, `RRSS`, `federerando`, `peso`,
                `altura`, `camiseta_talla`, `pantalone_talla`,
                 `pie_talla`, `club_nombre`, `categoria_tipo`, `nivel_de_clases_tipo`,
                  `fecha_de_inicio`, `fecha_de_baja`, `usuario`, `contrasena`, `rango`)
                   VALUES ('','','".$name."','".$surname1."','".$surname2."',
                   '".$birth_date."','".$phone."','".$email."','".$address."','".$sex."',
                   '".$user."','".$social_media."','".$federation."','".$weight."','".$height."',
                   '".$shirt_size."','".$short_size."','".$shoe_size."','".$club_name."','".$categoria_id."',
                   '".$class_level_id."','".$start_date."','".$end_date."','".$username."','".$password_hash."',
                   'player')";
            $query = mysqli_query($GLOBALS['conn'], $insert);
            if($query){
                header('location: login.php?status=success');
                exit();
            }
            header('location: login.php?status=error');
            exit();
        }
        header('location: login.php?status=username_taken');
        exit();
    }
    register($_SESSION['fname'], $_SESSION['fsname'], $_SESSION['ssname'], $_SESSION['birthdate'], $_SESSION['tel'], $_SESSION['email'], $_SESSION['address'], $_SESSION['sex'], $_SESSION['apodo'], $_SESSION['rrss'], $_SESSION['federando'], $_SESSION['weight'], $_SESSION['height'], $_SESSION['camiseta'], $_SESSION['pantalone'], $_SESSION['pie'], $_SESSION['club'], $_SESSION['categoria'], $_SESSION['class'], $_SESSION['start-date'], $_SESSION['end-date'], $_SESSION['username'], $_SESSION['pwd']);