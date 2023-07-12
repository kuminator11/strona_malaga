<?php
    include('conn.php');
    function get_user_cred(){
        $insert = "SELECT * FROM `jugador` WHERE `usuario`='".$_SESSION['user']."'";
        $query = mysqli_query($GLOBALS['conn'], $insert);
        while($row = mysqli_fetch_assoc($query)){
            $_SESSION['name'] = $row['nombre'];
            $_SESSION['surname'] = $row['apellido_uno'];
            $_SESSION['surname2'] = $row['apellido_dos'];
            $_SESSION['address'] = $row['direccion'];
            $_SESSION['sex'] = $row['sexo'];
            $_SESSION['phone'] = $row['numero_de_tel'];
            $_SESSION['social_media'] = $row['RRSS'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['birth_date'] = $row['fecha_nac'];
            $_SESSION['nickname'] = $row['apodo'];
            $_SESSION['federation'] = $row['federerando'];
            $_SESSION['club_name'] = $row['club_nombre'];
            $_SESSION['category_type'] = $row['categoria_tipo'];
            $_SESSION['class_type'] = $row['nivel_de_clases_tipo'];
            $_SESSION['start_date'] = $row['fecha_de_inicio'];
            $_SESSION['end_date'] = $row['fecha_de_baja'];
            $_SESSION['weight'] = $row['peso'];
            $_SESSION['height'] = $row['altura'];
            $_SESSION['tshirt_size'] = $row['camiseta_talla'];
            $_SESSION['pants_size'] = $row['pantalone_talla'];
            $_SESSION['shoe_size'] = $row['pie_talla'];
        }
    }
    get_user_cred();
?>