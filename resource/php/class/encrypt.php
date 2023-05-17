<?php
    class encrypt {

        public function secure($text) {
            // I used the password_hash() function instead of the standard encrypt method
            $encrypted = password_hash("$text", PASSWORD_BCRYPT);
            return $encrypted;
        }
    }
?>