<?php
    session_start();
    include('conn.php');
    include('load_profile.php');
    #get_user_cred();
    function update_cred(){
        $insert = "UPDATE `jugador` SET `nombre`='".$_GET['fname']."',`apellido_uno`='".$_GET['fsname']."',`apellido_dos`='".$_GET['ssname']."',`fecha_nac`='".$_GET['birthdate']."',`numero_de_tel`='".$_GET['tel']."',`email`='".$_GET['email']."',`direccion`='".$_GET['address']."',`sexo`='".$_GET['sex']."',`RRSS`='".$_GET['rrss']."',`peso`='".$_GET['weight']."',`altura`='".$_GET['height']."',`camiseta_talla`='".$_GET['camiseta']."',`pantalone_talla`='".$_GET['pantalone']."',`pie_talla`='".$_GET['pie']."' WHERE `usuario`='".$_SESSION['user']."'";
        $query = mysqli_query($GLOBALS['conn'], $insert);
        if($query){
            header('location: personal-information.php?status=success');
            exit();
        }
        else{
            header('location: personal-information.php?status=error');
            exit();
        }
    }
    update_cred();
?>