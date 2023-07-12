<?php
    require_once('./conn.php');
    include('functions.php');
    session_start();
    
    # TRYING TO LOGIN // TRATANDO DE INICIAR SESIÓN
    function login($user, $password){
        $insert = "SELECT * FROM `jugador` WHERE `usuario`='".$user."'";
        $query = mysqli_query($GLOBALS['conn'], $insert);
        while($row = mysqli_fetch_assoc($query)){
            $password_verify = password_verify($password, $row['contrasena']);
            if($user == $row['usuario'] && $password_verify == '1'){
                $_SESSION['user'] = $user;
                $_SESSION['user_rank'] = $row['rango'];
                header_remove();
                if($row['rango'] == 'admin'){
                    header('location: control-panel.php');
                    exit();
                }
                else{
                    header('location: user-profile.php');
                    exit();
                }
            }
            elseif($user == $row['usuario'] && $password != $row['contrasena']){
                header_remove();
                header('location: login.php?status=wrong_password');
                exit();
            }
        }
        header('location: login.php?status=user_not_found');
        exit();
    }
    
    $test = login($_GET['username'], $_GET['password']);