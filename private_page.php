<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:login.php");
}
?>
<html>
    <head>
        <title>PRIVATE PAGE</title>
        <script type="text/javascript" src="validate.js"></script>
        <link rel="stylesheet" type="text/css" href="validate.css">
    </head>
    <body>
        <p>This is a private jet</p>
        <p>We want to protect it</p>
        <p><a href="logout.php">Logout</a></p>
    </body>
</html>