<?php
    session_start();
    include('conn.php');
    include('functions.php');
    include('load_profile.php');


    function update_password($new, $new2){
        if($new == $new22){
            $new_hash = generate_hash($new);
            $insert = "UPDATE `jugador` SET `contrasena`='".$new_hash."' WHERE `usuario`='".$username."'";
            $query = mysqli_query($GLOBALS['conn'], $insert);
            if($query){
                header('location: account-information.php?status=success');
                exit();
            }
            else{
                header('location: account-information.php?status=error');
                exit();
            }
        }
    }

    function verify_user_password($username, $old, $new, $new2){
        if($new == $new2){
            $insert = "SELECT `contrasena` FROM `jugador` WHERE `usuario`='".$username."'";
            $query = mysqli_query($GLOBALS['conn'], $insert);
            while($row = mysqli_fetch_assoc($query)){
                $hashed_pwd = verify_password($old, $row['contrasena'])
                if($hashed_pwd == 'success'){
                    update_password($new, $new2);
                }
            }
        }
        else{
            header('location: account-information.php?status=retype_pass');
            exit();
        }
    }
    verify_user_password($_GET['username'], $_GET['oldpwd'], $_GET['newpwd'], $_GET['new2pwd']);
?>