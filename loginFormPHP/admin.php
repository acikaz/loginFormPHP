<?php

session_start();

if($_SESSION['status']!="prijavljeni_ste") {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
</head>
<body>
    <h1>Dobrodosli! <?php echo $_SESSION['name']; ?>, <?php echo $_SESSION['status']?>  </h1>
    <br>
    <a href="logout.php">Odjavi se</a>
</body>
</html>