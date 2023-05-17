<?php
    function insertAccMsg() {
        if (isset($_POST['reg_btn'])) {
            $encrypt = new encrypt;
            $enc_pass = $encrypt->secure($_POST['pass_box']);
            $date = date('Y-m-d H:i:s');

            $insert = new insertAcc($_POST['lname_box'], $_POST['fname_box'], $_POST['email_box'], $enc_pass, $date);

            if ($insert->addAcc()) {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        User has been added!
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } else {
                echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Error adding user...
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            }
        }
    }
?>