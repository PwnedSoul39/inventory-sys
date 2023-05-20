<?php
    function insertAccMsg() {
        // Validation and error messages
        if (isset($_POST['reg_btn'])) {
            $validate = new validate();
            $validate->validReg($_POST['lname_box'], $_POST['fname_box'], $_POST['uname_box'], $_POST['email_box'], $_POST['pass_box'], $_POST['type_choice']);
        }
    }

    function loginMsg() {
        // Validation and error messages x2
        if (isset($_POST['log_btn'])) {
            $validate = new validate();
            $validate->validLog($_POST['email_logbox'], $_POST['pass_logbox']);
        }
    }

    function newPassMsg() {
        if (isset($_POST['edit_btn'])) {
            $validate = new validate();
            $validate->validNewPass($_POST['pass_editbox'],$_POST['confirm_pass_editbox']);
        }
    }

    function logStatus() {
        // Boolean function ichecheck ung status mo kung may nakaset ng values sa dalawang to
        if (isset($_SESSION['user']) && isset($_SESSION['user_level']) && isset($_SESSION['user_f']) && isset($_SESSION['user_mail']) && isset($_SESSION['user_join'])) {
            return true;
        } else {
            return false;
        }
    }

    // Kapag nag lagay ako ng else statement dito magkakaerror ng too many redirects kasi ireredirect ka na nung validation after login
    function logLockUser() {
        // Will check user role/user level
        if ($_SESSION['user_level'] == 0) {
            header('location:home.php');
            exit();
        }
    }

    function logLockAdmin() {
        // Will check user role/user level x2
        if ($_SESSION['user_level'] == 1) {
            header('location:dashboard.php');
            exit();
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
        // dedestroy ung session para hindi magcarry out sa susunod na user
        session_start();
        session_destroy();
        header('Location:index.php');
        exit();
    }

    function userUpdate() {
        if (!empty($_GET['update'])) {
            $edit = new editStuff($_GET['update']);

            if ($edit->editType()) {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        User edited successfully
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } else {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Error while editing user
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            }
        }
    }
    
    function userDelete() {
        if (!empty($_GET['delete'])) {
            $delete = new deleteUser($_GET['delete']);
            
            if ($delete->delUser()) {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        User deleted successfully
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } else {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Error while deleting user
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            }
        }
    }

    function userMsg(){
        userDelete();
        userUpdate();
    }
?>