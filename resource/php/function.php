<?php
    function validateReg() {
        $validate = new validate;
        $validate->validName($_POST['lname_box'], $_POST['fname_box']);
        $validate->validPass($_POST['pass_box']);
        $validate->validEmail($_POST['email_box']);
    }

    function insertAccMsg() {
        if (isset($_POST['reg_btn'])) {
            if (!validateReg()) {
                $encrypt = new encrypt;
                $encryption = $encrypt->secure($_POST['pass_box']);
                $date = date('Y-m-d H:i:s');

                $insert = new insertAcc($_POST['lname_box'], $_POST['fname_box'], $_POST['email_box'], $encryption, $_POST['type_choice'], $date);

                if ($insert->addAcc()) {
                    echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            User has been added
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                } else {
                    echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Error adding user
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                }
            } else {
                return validateReg();
            }
        }
    }

    function loginMsg() {
        if (isset($_POST['log_btn'])) {
            $validate = new validate;
            $validate->validLog($_POST['email_logbox'], $_POST['pass_logbox']);
        }
    }
?>