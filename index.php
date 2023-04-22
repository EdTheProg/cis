<?php
session_start();

if(isset($_SESSION['user_id'])) {
    echo "Session active for user with ID ".$_SESSION['user_id'];
} else {
    echo "No active session found";
}
?>