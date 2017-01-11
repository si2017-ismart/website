<?php
session_start();
session_destroy();
header('Location: http://localhost/projet_intensif/view/catalogue.php');
?>
