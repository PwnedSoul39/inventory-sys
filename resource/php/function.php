<?php
    function insertAccMsg() {
        // Validation and error messages
        if (isset($_POST['reg_btn'])) {
            $validate = new validate();
            $validate->validReg($_POST['lname_box'], $_POST['fname_box'], $_POST['uname_box'], $_POST['email_box'], $_POST['pass_box'], $_POST['type_choice']);
        }
    }
    
    function insertItemMsg() {
        // Validation and error messages x2
        if (isset($_POST['item_add'])) {
            $validate = new validate();
            $iname = $_POST['iname_box'];
            $itype = $_POST['itype_box'];
            $ibrand = $_POST['ibrand_box'];
            $iprice = intval($_POST['iprice_box']);
            $iqty = intval($_POST['iqty_box']);
            $istat = intval($_POST['istat_box']);
            $validate->validNewItem($iname,$itype,$ibrand,$iprice,$iqty,$istat);
        }
    }

    function loginMsg() {
        // Validation and error messages x3
        if (isset($_POST['log_btn'])) {
            $validate = new validate();
            $validate->validLog($_POST['email_logbox'], $_POST['pass_logbox']);
        }
    }

    function newPassMsg() {
        // Validation and error messages x4
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
        session_unset();
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
                        <i class="fa-solid fa-circle-check"></i> User edited successfully
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } else {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Error while editing user
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
            $delete = new deleteStuff($_GET['delete']);
            
            if ($delete->delUser()) {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check"></i> User deleted successfully
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } else {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Error while deleting user
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

    function orderUpdate() {
        if (!empty($_GET['ordered'])) {
           $edit = new editStuff($_GET['ordered']); 

           if ($edit->editStatusO()) {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check"></i> Order updated successfully
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
           } else {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Error updating order
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
           } 
        } elseif (!empty($_GET['packed'])) {
            $edit = new editStuff($_GET['packed']);

            if ($edit->editStatusP()) {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check"></i> Order updated successfully
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } else {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Error updating order
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            }
        } elseif (!empty($_GET['transit'])) {
            $edit = new editStuff($_GET['transit']);

            if ($edit->editStatusT()) {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check"></i> Order updated successfully
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } else {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Error updating order
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            }
        } elseif (!empty($_GET['delivered'])) {
            $edit = new editStuff($_GET['delivered']);

            if ($edit->editStatusD()) {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check"></i> Order updated successfully
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } else {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Error updating order
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';                
            }
        }
    }

    function orderDelete() {
        if (!empty($_GET['obl'])) {
            $delete = new deleteStuff($_GET['obl']);
            
            if ($delete->delOrder()) {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check"></i> Order deleted successfully
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } else {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Error while deleting order
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            }
        }
    }

    function orderMsg() {
        orderUpdate();
        orderDelete();
    }

    function itemDelete() {
        if (!empty($_GET['remove'])) {
            $delete = new deleteStuff($_GET['remove']);
            
            if ($delete->delItem()) {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check"></i> Item deleted successfully
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } else {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Error while deleting Item
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            }
        }
    }

    function itemUpdate() {
        if (!empty($_GET['act'])) {
           $edit = new editStuff($_GET['act']); 

           if ($edit->editStatusAct()) {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check"></i> Item updated successfully
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
           } else {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Error updating item
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
           } 
        } elseif (!empty($_GET['inact'])) {
            $edit = new editStuff($_GET['inact']);

            if ($edit->editStatusIna()) {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check"></i> Item updated successfully
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
           } else {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Error updating item
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
           } 
        } elseif (!empty($_GET['disc'])) {
            $edit = new editStuff($_GET['disc']);

            if ($edit->editStatusDis()) {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-circle-check"></i> Item updated successfully
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
           } else {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Error updating item
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
           } 
        }
    }

    function itemMsg() {
        itemDelete();
        itemUpdate();
    }
?>
