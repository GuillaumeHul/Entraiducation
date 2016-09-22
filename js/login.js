document.getElementById('formlog').onsubmit = function(event)
{
    var logv = document.getElementById('login');
    var passv = document.getElementById('pass');

    if((logv.value.trim() == "") && (passv.value.trim() == ""))
    {
        event.preventDefault();
        return alert('Vous n\'êtes pas autorisé à vous connecter !');
    }
}
