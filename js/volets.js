var vol1 = document.getElementById('volet1');
var vol2 = document.getElementById('volet2');

document.getElementById('down').onclick = function ()
{
    if(!document.getElementById('volet1').classList.contains("vertiTranslate"))
    {
        vol1.classList.add('vertiTranslate');
        vol2.classList.add('vertiTranslate');

        vol1.classList.remove("vertiTranslate2");
        vol2.classList.remove("vertiTranslate2");
    }
    else if (!document.getElementById('volet1').classList.contains("vertiTranslate2"))
    {
        vol1.classList.remove("vertiTranslate");
        vol2.classList.remove("vertiTranslate");

        vol1.classList.add('vertiTranslate2');
        vol2.classList.add('vertiTranslate2');
    }
}

document.getElementById('up').onclick = function ()
{
    if(!document.getElementById('volet1').classList.contains("vertiTranslate"))
    {
        vol1.classList.add('vertiTranslate');
        vol2.classList.add('vertiTranslate');

        vol1.classList.remove("vertiTranslate2");
        vol2.classList.remove("vertiTranslate2");
    }
    else if (!document.getElementById('volet1').classList.contains("vertiTranslate2"))
    {
        vol1.classList.remove("vertiTranslate");
        vol2.classList.remove("vertiTranslate");

        vol1.classList.add('vertiTranslate2');
        vol2.classList.add('vertiTranslate2');
    }
}

var menu = document.getElementById('menum');

document.getElementById('burger').onclick = function ()
{
    if(menu.classList.contains("wrong"))
    {
        menu.classList.add('good');
        menu.classList.remove("wrong");
    }
    else if (menu.classList.contains("good"))
    {
        menu.classList.add('wrong');
        menu.classList.remove("good");
    }
}
