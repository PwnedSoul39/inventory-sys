<?php
    function insertAccMsg() {
        if (isset($_POST['reg_btn'])) {
            $validate = new validate();
            $validate->validReg($_POST['lname_box'], $_POST['fname_box'], $_POST['uname_box'], $_POST['email_box'], $_POST['pass_box'], $_POST['type_choice']);
        }
    }

    function loginMsg() {
        if (isset($_POST['log_btn'])) {
            $validate = new validate();
            $validate->validLog($_POST['email_logbox'], $_POST['pass_logbox']);
        }
    }

    function logStatus() {
        // Boolean function ichecheck ung status mo kung may nakaset ng values sa dalawang to
        if (isset($_SESSION['user']) && isset($_SESSION['user_level'])) {
            return true;
        } else {
            return false;
        }
    }
    
    function logIn() {
        // Kapag wala kang values ireredirect ka lagi sa index.
        if (logStatus() == false) {
            header('location:index.php');
            exit();
        }
    }

    function logOut() {
        // dedestroy ung session
        session_start();
        session_destroy();
        header('Location:index.php');
        exit();
    }
?>