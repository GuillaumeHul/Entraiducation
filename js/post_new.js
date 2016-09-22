document.getElementById('form_post').onsubmit = function(event)
{
    var titrev = document.getElementById('titre');

    if((titrev.value.trim() == "") || (isNaN(titrev.value) == false) || (titrev.value.length < 2))
    {
        event.preventDefault();
        return alert('Veuillez saisir un titre correct');
    }


    var stitrev = document.getElementById('sous_titre');

    if((stitrev.value != "") && (isNaN(stitrev.value) == false) || (stitrev.value != "") && (stitrev.value.length < 2))
    {
        event.preventDefault();
        return alert('Veuillez saisir un sous-titre correct');
    }


    var contenuv = document.getElementById('contenu');

    if(contenuv.value.trim() == "")
    {
        event.preventDefault();
        return alert('Veuillez saisir un message');
    }
    else if (contenuv.value.length < 200)
    {
        event.preventDefault();
        return alert('Veuillez entrer une phrase d\'au moins 200 carractères');
    }
}
