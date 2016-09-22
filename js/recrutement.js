document.getElementById('formuc').onsubmit = function(event)
{
    var nomv = document.getElementById('nomr');
    var nomvbis = nomv.value;

    if((nomv.value.trim() == "") || (isNaN(nomv.value) == false) || (nomvbis.length < 2))
    {
        event.preventDefault();
        return alert('Veuillez saisir un nom correct');
    }


    var prenomv = document.getElementById('prenomr');
    var prenomvbis = prenomv.value;

    if((prenomv.value.trim() == "") || (isNaN(prenomv.value) == false) || (prenomvbis.length < 2))
    {
        event.preventDefault();
        return alert('Veuillez saisir un prénom correct');
    }


    var mailv = document.getElementById('mailr');

    if(mailv.value.trim() == "" || (mailv.value.indexOf("@")<=0) || (mailv.value.indexOf(".")<=0))
    {
        event.preventDefault();
        return alert('Veuillez saisir un mail valide');
    }


    var telv = document.getElementById('telr');

    if((isNaN(telv.value) == true) && (telv.value != ""))
    {
        event.preventDefault();
        alert('Renseignez un numéro correct');
    }

    else if ((telv.value < 0) && (telv.value != ""))
    {
        event.preventDefault();
        alert('Renseignez un numéro non négatif');
    }


    if(document.getElementById('filer') == "")
    {
        event.preventDefault();
        return alert('Veuillez joindre votre CV');
    }
}
