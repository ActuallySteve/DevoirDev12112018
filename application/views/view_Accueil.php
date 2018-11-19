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
// $this->load->library('session');
// $infoUser = $this->session->userdata('infoLog');
// ?>
<form method="POST" action="<?php echo base_url(); ?>index.php/Ctrl_Accueil/seConnecter/">
    <label>Votre nom</label><br>
    <input type="text" name="leNom"><br><br>
    <input type="submit" name="btnConnection" value="Connection">
</form>
<?php
foreach ($lesRegions as $uneRegion)
{
?>
<input type='radio' value='<?php echo $uneRegion->idRegion?>' name='idRegion'><?php echo $uneRegion->nomRegion ?> <?php echo $uneRegion->scoreRegion ?><br> 
<?php
}

?>
</body>
</html>