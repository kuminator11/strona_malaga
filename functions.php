<?php
    session_start();
    require_once('./conn.php');

    #CHECK IF THE USERNAME IS TAKEN /// COMPRUEBE SI EL NOMBRE DE USUARIO ESTÁ TOMADO
    function user_existence($username){
        $insert = "SELECT `usuario` FROM `jugador`";
        $query = mysqli_query($GLOBALS['conn'], $insert);
        while($row = mysqli_fetch_assoc($query)){
            if($row['usuario'] == $username){
                return 'found';
            }
        }
        return 'not found';
    }

    #USER REGISTER /// REGISTRO DE USUARIO
    function register_jugador($user){
        $check_username = user_existence($user);
        if($check_username == 'not found'){
            $insert = "INSERT INTO `jugador`(`jugdaor_id`, `foto`, `nombre`, `apellido_uno`, `apellido_dos`, `fecha_nac`, `numero_de_tel`, `email`, `direccion`, `sexo`, `apodo`, `RRSS`, `federerando`, `peso`, `altura`, `camiseta_talla`, `pantalone_talla`, `pie_talla`, `club_id`, `categoria_id`, `nivel_de_clases_id`, `fecha_de_inicio`, `fecha_de_baja`, `usuario`, `contrasena`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]','[value-20]','[value-21]','[value-22]','[value-23]','[value-24]','[value-25]')";
            $query = mysqli_query($GLOBALS['conn'], $insert);
            if($query){
                return 'success';
            }
            return 'error';
        }
        return 'username taken';
    }

    #FUNCTION TO VERIFY USER DATA /// FUNCIÓN DE VERIFICACIÓN DE DATOS DE USUARIO
    function login_entrador($user, $password){
        $insert = "SELECT * FROM `entrador` WHERE `entrador_usuario`='".$user."'";
        $query = mysqli_query($GLOBALS['conn'], $insert);

        while($row = mysqli_fetch_assoc($query)){
            if($user == $row['entrador_usuario'] && $password == $row['entrador_contrasena']){
                header('Location: login_page.php?status=success');
                return 'success'; # éxito
            }
            elseif($user == $row['entrador_usuario'] && $password != $row['entrador_contrasena']){
                header('Location: login_page.php?status=wrong_password');
                return 'wrong password'; # contraseña incorrecta
            }
        }
        header('Location: login_page.php?status=user_not_found');
        return 'user not found'; # usuario no existe
    }

    function generate_hash($string){
        return password_hash($string, PASSWORD_BCRYPT);
    }

    function verify_password($password, $hash){
        $verify = password_verify($password, $hash);
        if($verify == '1'){
            return 'success';
        }
        else{
            return 'bad';
        }
    }

    #SAVING IMAGE /// GUARDAR IMAGEN
    function save_image($data){
        $data = base64_decode($data);
        file_put_contents('files/'.$_SESSION['user'].'.jpeg', $data);
    }

    #RENDERING IMAGE /// RENDERIZAR IMAGEN
    function render_image($image_path){
        $image = imagecreatefromjpeg("$image_path");
        ob_start();
        imagejpeg($image);
        $contents = ob_get_contents();
        ob_end_clean();
        $dataUri = "data:image/jpeg;base64," . base64_encode($contents);
        save_image(base64_encode($contents));
        #$_SESSION['user_image'] = base64_encode($contents);

    }
    render_image($_FILES['file_path']["tmp_name"]);

