<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JS/mesFonctions.js"></script>
    <script src="JQuery/jquery-3.1.1.js"></script> 
    <script>
        $
        (
            function()
            {
                $('input[name=idRegion]').click
                (
                    function()
                    {
                        AfficherLesVilles($(this).val());
                    }
                )
            }
        );

    </script>
</head>
<body>
<?php
$this->load->library('session');
$infoUser = $this->session->userdata('infoLog');
?>
<?php
foreach ($lesRegions as $uneRegion)
{
?>
<input type='radio' value='<?php echo $uneRegion->idRegion?>' name='idRegion'><?php echo $uneRegion->nomRegion ?> <?php echo $uneRegion->scoreRegion ?><br> 
<?php
}
?>
<div id="divVilles"></div>
</body>
</html>