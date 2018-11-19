<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form method="POST" action="<?php echo base_url(); ?>index.php/Ctrl_Login/seConnecter/">
    <label>Votre nom</label><br>
    <input type="text" name="leNom"><br><br>
    <input type="submit" name="btnConnection" value="Connection">
</form> 
</body>
</html>