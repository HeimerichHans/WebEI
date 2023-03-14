function ajoutSalade(nom,prix)
{
    $.get("ajouter_panier.php?article="+nom+"&prix="+prix,traiterReponseDemande(nom));
}

function traiterReponseDemande(nom)
{
    $("#unMessage").html(nom+" ajouter");
}
