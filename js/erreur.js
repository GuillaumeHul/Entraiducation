document.getElementById('errform').onsubmit = function(event)
{
    var comv = document.getElementById('comcontent');
    var comvbis = comv.value;

    if(comv.value.trim() == "")
    {
        event.preventDefault();
        return alert('Veuillez saisir un message');
    }
    else if (comvbis.length < 10)
    {
        event.preventDefault();
        return alert('Veuillez entrer une phrase d\'au moins 10 carractères');
    }
}
