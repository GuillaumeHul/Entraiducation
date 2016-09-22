document.getElementById('form_post').onsubmit = function(event)
{
    var catv = document.getElementById('description');

    if((catv.value.trim() == "") || (isNaN(catv.value) == false) || (catv.value.length < 2))
    {
        event.preventDefault();
        return alert('Veuillez saisir un titre correct');
    }
}
