function AfficherLesVilles(idRegion)
{
$.ajax
(
    {
        type:"get",
        url:"index.php/Ctrl_Ville/AfficherLesVilles",
        data:"idReg="+idRegion,
        success:function(data)
        {
            $("#divVilles").empty();
            $("#divVilles").append(data);
        },
        error:function()
        {
            alert("Ereur d'affichage sur les villes");
        }
    }
);
}