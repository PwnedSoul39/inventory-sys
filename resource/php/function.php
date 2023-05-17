<?php
    function insertAccMsg() {
        if (isset($_POST['reg_btn'])) {
            $encrypt = new encrypt;
            $enc_pass = $encrypt->secure($_POST['pass_box']);
            $date = date('Y-m-d H:i:s');

            $insert = new insertAcc($_POST['lname_box'], $_POST['fname_box'], $_POST['email_box'], $enc_pass, $_POST['type_choice'], $date);

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
        }
    }

    function loginMsg() {
        if (isset($_POST['log_btn'])) {
            $valid = new validate();
            $validation = $valid->validLogin($_POST['email_logbox'], $_POST['pass_logbox']);

            if (empty($_POST['email_logbox'])) {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Please enter your email
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } elseif (empty($_POST['pass_logbox'])) {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Please enter your password
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                '; 
            } elseif ($validation) {
                return $validation;
            } else {
                echo '
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                         Invalid email or password
                         <button class="close" type="button" data-dismiss="alert" aria-label="close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                 '; 
            }
        }
    }
?>