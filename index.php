<?php
include("includes/config.php");

// session_destory(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
    header("Location: register.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Slotify</title>
</head>
<body>Index page 
    <form action="">
        
    </form>
</body>
</html>