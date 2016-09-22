document.getElementById('form_post').onsubmit = function(event)
{
    var logv = document.getElementById('login');

    if((logv.value.trim() != "") && (logv.value.length < 2))
    {
        event.preventDefault();
        return alert('Veuillez saisir un login correct');
    }


    var passv = document.getElementById('password');

    if((passv.value.trim() != "") && (passv.value.length < 5))
    {
        event.preventDefault();
        return alert('Veuillez saisir un mot de passe d\'au moins 5 caractères');
    }


    var mailv = document.getElementById('mail');

    if((mailv.value.trim() != "") && (mailv.value.indexOf("@")<=0) || (mailv.value.trim() != "") && (mailv.value.indexOf(".")<=0))
    {
        event.preventDefault();
        return alert('Veuillez saisir un mail valide');
    }


    var pseudov = document.getElementById('pseudo');

    if((passv.value.trim() == "") || (isNaN(passv.value) == false) || (passv.value.length < 5))
    {
        event.preventDefault();
        return alert('Veuillez saisir un pseudo d\'au moins 5 caractères et qui n\'est pas un nombre');
    }
}
