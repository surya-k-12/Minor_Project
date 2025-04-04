<?php
session_start();
session_destroy();
header("Location: recruiter_login.html");
exit();
?>
