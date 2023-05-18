<?php
    class validate extends config {
        public function verifyPass($text, $hash) {
            // I used this function instead of openssl_decrypt method to verify password. The $hash is the generated password_hash() stored in the database
            return password_verify($text, $hash);
        }

        public function sanitizeMail($mail) {
            // Boolean ata to na titignan kung valid ba yung email
            return filter_var($mail, FILTER_SANITIZE_EMAIL);
        }

        public function checkName($string) {
            // Removes extra whitespaces, slashes, and converts special characters to html code (ex. ' = &#39;) 
            $string = trim($string);
            $string = stripslashes ($string);
            $string = htmlspecialchars($string);
            return $string;
        }

        public function validLog($lmail, $lpass) {
            // Validates login information       
            if (!empty($lmail) && !empty($lpass)) {
                $con = $this->con();
                $sql = "SELECT * FROM `tbl_user` WHERE `u_email` = '$lmail'";
                $data = $con->prepare($sql);
                $data->execute();
                $result = $data->fetchAll(PDO::FETCH_ASSOC);

                foreach ($result as $data) {
                    if ($this->verifyPass($lpass, $data['u_pass'])) {
                        header('location:dashboard.php');
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
            } elseif (empty($lmail)) {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Pleaser enter your email
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } elseif (empty($lpass)) {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Pleaser enter your password
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } else {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Invalid information
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            }
        }
        
        public function validPass($pass) {
            // Validates passwords during user registration and password update
            $upper = preg_match('@[A-Z]@', $pass);
            $lower = preg_match('@[a-z]@', $pass);
            $num = preg_match('@[0-9]@', $pass);
            $sp = preg_match ('@[^\w]@', $pass);

            if (!$upper) {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password should at least have one uppercase letter
                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
            } elseif (!$lower) {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password should at least have one lowercase letter
                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
            } elseif (!$num) {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password should at least have one number
                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
            } elseif (!$sp) {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password should at least have one special character
                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
            } elseif (strlen($pass) < 8) {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password should have at least 8 characters
                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
            }
        }

        public function validName($lname, $fname) {
            // Validates the name during user registration. Wala ng else statement kasi naka required naman ung registration form natin
            $v_lname = $this->checkName($lname);
            $v_fname = $this->checkName($fname);

            if (!empty($lname)) {
                // preg_match pattern finds if the word has any upper or lower letters from the alphabet([a-zA-Z])
                if (!preg_match('/^[a-zA-Z\s-]*$/', $v_lname)) {
                    echo '                
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Last Name shouldn&#39;t contain any numbers
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                }
            } elseif (!empty($fname)) {
                // preg_match pattern finds if the word has any upper or lower letters from the alphabet([a-zA-Z]) and if it has a white space(\s) and if it has at zero or one period(.?)
                if (!preg_match('/^[a-zA-Z\s.?]*$/', $v_fname)) {
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            First Name shouldn&#39;t contain any numbers
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                }
            }
        }
        
        public function validEmail($mail) {
            if (!(filter_var($mail, FILTER_VALIDATE_EMAIL))) {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Invalid Email
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            }
        }
    }
    ?>