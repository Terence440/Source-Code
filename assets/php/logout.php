<?php
    session_start();
    if(isset($_SESSION['unique_id'])){ // if user is logged in then come to this page otherwise go to login page
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){ // if logout id is set
            $status = "Offline now";
            // once user logout then update the status to offline and in the login form
            // we will again update the status to active now if user logged in succesfully
            $sql = mysqli_query($conn, "UPDATE chat SET status = '{$status}' WHERE unique_id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../../loginPage.php");
            }
        }else{
            header("location: ../ChatSystem/chat.php");
        }
    }else{  
        header("location: ../../loginPage.php");
    }
?>