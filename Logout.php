<?php
session_start();
session_destroy();
header("Location: Careercrafthub.php");
exit();
?>