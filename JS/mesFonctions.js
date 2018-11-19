function AfficherConferences(IDCONFERENCE)
{
$.ajax
(
    {
        type:"get",
        url:"index.php/CtrlAccueil/AfficherConferences",
        data:"IDCONFERENCE="+IDCONFERENCE,
        success:function(data)
        {
            $("#divConferences").empty();
            $("#divConferences").append(data);
        },
        error:function()
        {
            alert("Erreur SQL");
        }
    }
);
}