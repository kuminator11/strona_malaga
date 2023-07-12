<?php
    session_start();
    include('conn.php');
    include('functions.php');
    include('load_profile.php');


    function update_club(){
        $insert = "UPDATE `jugador` SET `apodo`='".$_GET['apodo']."',`federerando`='".$_GET['federando']."',`club_nombre`='".$_GET['club']."',`categoria_tipo`='".$_GET['categoria']."',`nivel_de_clases_tipo`='".$_GET['class']."',`fecha_de_inicio`='".$_GET['start-date']."',`fecha_de_baja`='".$_GET['end-date']."' WHERE `usuario`='".$_SESSION['user']."'";
        #echo $insert;
        $query = mysqli_query($GLOBALS['conn'], $insert);
        if($query){
            header('location: club-information.php?status=success');
            exit();
        }
        else{
            header('location: club-information.php?status=error');
            exit();
        }
    }

    update_club();
?>