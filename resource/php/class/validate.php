<?php
    include 'insertAcc.php';
    include 'insertItem.php';
    include 'editPass.php';

    class validate extends config {
        public function secure($text) {
            // I used this function instead of the openssl_encrypt method. Finuction ko na kasi nakakatamad itype ung buo (￣▽￣)
            return password_hash($text, PASSWORD_BCRYPT);
        }

        public function verifyPass($text, $hash) {
            // I used this function instead of openssl_decrypt method to verify password. The $hash is the generated password_hash() stored in the database
            return password_verify($text, $hash);
        }

        public function sanitizeMail($mail) {
            // Boolean ata to na titignan kung valid ba yung email
            $mail = trim($mail);
            return filter_var($mail, FILTER_SANITIZE_EMAIL);
        }

        public function checkName($string) {
            // Removes extra whitespaces, slashes, and converts special characters to html code (ex. ' = &#39;) 
            $string = trim($string);
            $string = stripslashes ($string);
            $string = htmlspecialchars($string);
            return $string;
        }

        public function sanitizeNum($num) {
            // Removes other characters except for numbers, + and - signs then converts them into an integer.
            $num = trim($num);
            return filter_var($num, FILTER_SANITIZE_NUMBER_INT);
        }

        public function validLog($lmail, $lpass) {
            // Validates login information       
            if (!empty($lmail) && !empty($lpass)) {
                $con = $this->con();
                $sql = "SELECT * FROM `tbl_user` WHERE `u_email` = '$lmail' OR `u_uname` = '$lmail'";
                $data = $con->prepare($sql);
                $data->execute();
                $result = $data->fetchAll(PDO::FETCH_ASSOC);
                
                if (!$result) {
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i> Invalid email or username
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                } else {
                    foreach ($result as $data) {
                        if ($this->verifyPass($lpass, $data['u_pass'])) {
                            session_start();
                            $_SESSION['user'] = $data['u_uname'];
                            $_SESSION['user_level'] = $data['u_type'];
                            $_SESSION['user_f'] = $data['u_fname'] .' '. $data['u_lname'];
                            $_SESSION['user_mail'] = $data['u_email'];
                            $_SESSION['user_join'] = $data['u_date_joined'];
							
							if ($_SESSION['user_level'] == 0) {
								header('location:home.php');
								exit();
							} else {
								header('location:dashboard.php');
								exit();
							}
                        } elseif (!$this->verifyPass($lpass, $data['u_pass'])) {
                            echo '
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i> Invalid password
                                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            ';
                        } else {
                            echo '
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="fa-solid fa-triangle-exclamation"></i> Invalid email or username
                                    <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            ';
                        }
                    }            
                }
            } elseif (empty($lmail)) {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-triangle-exclamation"></i> Pleaser enter your email or username
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } elseif (empty($lpass)) {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-triangle-exclamation"></i> Pleaser enter your password
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } else {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Invalid information
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
                        <i class="fa-solid fa-triangle-exclamation"></i> Password should have at least one uppercase letter
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
                return false;
            } elseif (!$lower) {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Password should have at least one lowercase letter
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
                return false;
            } elseif (!$num) {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Password should have at least one number
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
                return false;
            } elseif (!$sp) {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Password should have at leastone special character
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
                return false;   
            } elseif (strlen($pass) < 8 && strlen($pass) > 16) {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Password should have at least 8-16 characters
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
            } else {
                return true;
            }
        }

        public function validName($lname, $fname) {
            // Validates the name during user registration. Wala ng else statement kasi naka required naman ung registration form natin
            $v_lname = $this->checkName($lname);
            $v_fname = $this->checkName($fname);

            if (!empty($lname)) {
                // preg_match pattern finds if the word has any upper or lower letters from the alphabet([a-zA-Z])
                if (!preg_match('/^[a-zA-Z\s-]*$/', $v_lname) && !preg_match('/^[a-zA-Z\s.?]*$/', $v_fname)) {
                    echo '                
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i> The Name shouldn&#39;t contain any numbers
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                    return false;
                } else {
                    return true;
                }
            } else {
                return false;
            }
        }
        
        public function validEmail($vmail) {
            // go figure
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_user` WHERE `u_email` = '$vmail'";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
                echo '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i> Email has already been taken
                        <button class="close" type="button" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
                return false;
            } else {
                if (!filter_var($vmail, FILTER_VALIDATE_EMAIL)) {
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i> Invalid Email
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                    return false;
                    } else {
                        return true;
                    }
                }
            }
            
        public function validUname($text) {
            // lol
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_user` WHERE `u_uname` = '$text'";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i> Username has already been taken
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                    return false;
            } else {
                if (strlen($text) > 30 || strlen($text) < 4) {
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i> Invalid Username
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                    return false;
                } elseif (empty($text)) {
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i> Please enter a username
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                    return false;
                } else {
                    return true;
                }
            }
        }

        public function validReg($l,$f,$u,$e,$p,$t) {
            $d = date('Y-m-d H:i:s');
            $p = $this->secure($p);

            if ($this->validEmail($e) == true && $this->validName($l,$f) == true && $this->validUname($u) == true && $this->validPass($p) == true ) {
                $insert = new insertAcc($l,$f,$u,$e,$p,$t,$d);
                if ($insert->addAcc()) {
                    echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-circle-check"></i> User has been added
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                } else {
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i> Error adding user
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                }
            }
        }

        public function validNewPass($a, $b) {
            if ($this->validPass($a) == true && $this->validPass($b) == true) {
                if ($a == $b) {
                    $a = $this->secure($a);
                    $update = new editPass($a);
                    
                    if ($update->editPassword()) {
                        echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa-solid fa-circle-check"></i> Password has been updated
                                <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        ';
                    } else {
                        echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa-solid fa-triangle-exclamation"></i> Error updating password
                                <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        ';
                    }
                } else {
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i> Password does not match
                            <button class="close" type="button" data-dismiss="alert">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
                }
            }
        }

        public function validNewItem($a,$b,$c,$d,$e,$f) {
            $a = trim($a);
            $b = trim($b);
            $c = trim($c);
            if (is_int($d) == 1 && is_int($e) == 1 && is_int($f) == 1) {                
                $insert = new insertItem($a,$b,$c,$d,$e,$f);

                if ($insert->addItem()) {
                    echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-circle-check"></i> Item has been added
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';                    
                } else {
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-triangle-exclamation"></i> Error adding item
                            <button class="close" type="button" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';                    
                }
                  
            }

        }
    }
?>