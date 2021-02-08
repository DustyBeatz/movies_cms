<?php 
require_once '../load.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the admin panel</title>
</head>
<body>
<h2> Welcome to the Dashboard page, <?php echo $_SESSION['user_name'];?></h2>
    <a href="admin_logout.php">Sign out</a>
</body>
</html>