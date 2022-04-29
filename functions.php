<?php
    function logged() {
        if (session_status() == PHP_SESSION_ACTIVE) {
            return true;
        }
    }
?>