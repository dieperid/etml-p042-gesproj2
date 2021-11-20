var test = true;

function clicked()
{
    if (test = true)
    {
        test = false
    }
    else
    {
        test = true;
    }
}
const checkbox = document.getElementsByName('modeDark');

function darkMode() {
    var element = document.body;
    if (test)
    {
        element.classList.toggle("dark-mode");
    }
    else
    {
        element.classList.toggle("");
    }
}

// function darkMode() {
//     var element = document.body;
//     element.classList.toggle("dark-mode");
// }