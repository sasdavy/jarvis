function checkLogin()
{
    var userName = document.forms["loginForm"]["email"].value;
    if (userName.indexof("@")<1)
    {
        window.alert("User Name Input Error!");
        return false;
    }
}