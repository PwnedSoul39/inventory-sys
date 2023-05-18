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
        if (isset($_SESSION['user_name']) && isset($_SESSION['user_type'])) {
            return true;
        } else {
            return false;
        }
    }

    function logIn() {
        // Kapag wala kang values ireredirect ka lagi sa index. The reverse if true naman
        if (logStatus() == false) {
            header('Location:index.php');
        } else {
            header('Location:dashboard.php');
        }
    }

    function logOut() {
        // dedestroy ung session mo at iuunset ung values para hindi magretain sa susunod na session
        if (logStatus() == true) {
            session_start();
            session_destroy();
            unset($_SESSION['user_name'], $_SESSION['user_type']);
            echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-circle-check"></i> You are logged out
                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
            header('refresh:5;url=index.php');
        } else {
            session_start();
            session_destroy();
            header('Location:index.php');
        }
    }
?>