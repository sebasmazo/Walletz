<?php
    /**
     * If the session is active, return true return false otherwise
     */
    function logged() {
        if (session_status() == PHP_SESSION_ACTIVE) {
            return true;
        }else{
            return false;
        }
    }
?>