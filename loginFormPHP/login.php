<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Prjava</title>
</head>
<body>
    <center>
        <form action="prijava_provjera.php" method="POST" >
        <h1>Prijavi se</h1>
        ime
        <input type="text" name="username">
        <br>
        sifra
        <input type="password" name="password">
        <br>
        <button type="submit">Prijavi se</button>
        </form>
    <!-- nakadno stavi boju upozorenja -->
    <?php
    if(isset($_GET['poruka'])){ ?>
        <label style="color:red;">
        <?php echo $_GET['poruka']; ?>
    </label>
    <?php } ?>
    </center>
</body>
</html>