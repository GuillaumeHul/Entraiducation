document.getElementById('formuc').onsubmit = function(event)
{
    var raisonv = document.getElementById('raison');

    if(raisonv.value == "----------------------")
    {
        event.preventDefault();
        alert('Veuillez renseignez l\'objet de votre demande');
    }


    var nomv = document.getElementById('nom');
    var nomvbis = nomv.value;

    if((nomv.value.trim() == "") || (isNaN(nomv.value) == false) || (nomvbis.length < 2))
    {
        event.preventDefault();
        return alert('Veuillez saisir un nom correct');
    }


    var prenomv = document.getElementById('prenom');
    var prenomvbis = prenomv.value;

    if((prenomv.value.trim() == "") || (isNaN(prenomv.value) == false) || (prenomvbis.length < 2))
    {
        event.preventDefault();
        return alert('Veuillez saisir un prénom correct');
    }


    var mailv = document.getElementById('mail');

    if(mailv.value.trim() == "" || (mailv.value.indexOf("@")<=0) || (mailv.value.indexOf(".")<=0))
    {
        event.preventDefault();
        return alert('Veuillez saisir un mail valide');
    }


    var telv = document.getElementById('tel');

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


    var contenuv = document.getElementById('contenu');

    if(contenuv.value.trim() == "")
    {
        event.preventDefault();
        return alert('Veuillez saisir un message');
    }
    else if (contenuv.value.length < 20)
    {
        event.preventDefault();
        return alert('Veuillez entrer une phrase d\'au moins 20 carractères');
    }
}
