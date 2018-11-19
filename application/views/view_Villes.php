<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
foreach($lesVilles as $uneVille)
{
?>
<a href=<?php echo base_url() ?>index.php/Ctrl_Ville/AfficherLesVilles/ <?php echo $uneVille->nomVille; ?>><?php echo $uneVille->scoreVille ?></a><br>
<?php
}

?>
</body>
</html>