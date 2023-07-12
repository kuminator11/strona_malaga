<?php
    session_start();
    include('conn.php');
    include('functions.php');
    include('load_profile.php');

    function get_names(){
        $list_of_names = array();
        $insert = "SELECT `nombre`, `apellido_uno`, `apellido_dos`, `email`, `numero_de_tel`, `nivel_de_clases_tipo`, `rango` FROM `jugador` WHERE 1";
        $query = mysqli_query($GLOBALS['conn'], $insert);
        while($row = mysqli_fetch_assoc($query)){
            $full_name = $row['nombre']." ".$row['apellido_uno']." ".$row['apellido_dos'];
            $creds = array();
            array_push($creds, $full_name);
            array_push($creds, $row['email']);
            array_push($creds, $row['numero_de_tel']);
            array_push($creds, $row['nivel_de_clases_tipo']);
            array_push($creds, $row['rango']);
            array_push($list_of_names, $creds);
        }
        return $list_of_names;
    }
    #class phone rank
    function search_user($phrase){
        $list = get_names();
        $found_users = array();
        for($x=0;$x<count($list);$x++){
            if(strpos($list[$x][0], $phrase) !== false){
                array_push($found_users, $list[$x]);
            }
        }
        if(count($found_users) !== 0){
            $_SESSION['found_users'] = $found_users;
        }
    }
    search_user($_GET['phrase']);
    header('location: control-panel.php');
    exit();
?>