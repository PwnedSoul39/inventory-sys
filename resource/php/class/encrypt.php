<?php
    class encrypt {
        public function secure($text) {
            // I used this function instead of the openssl_encrypt method
            return password_hash("$text", PASSWORD_BCRYPT);
        }
    }
?>