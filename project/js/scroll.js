window.onscroll=function(){myfunction()};
function myfunction()
{
  var navbar=document.getElementById('mynav')
  if (document.body.scrollTop>140 || document.documentElement.scrollTop > 140) 
  {
    navbar.className="navbar"+" navbar-default"+" sticky"+" navbar-boxshadow";
  }
  else
  {
    navbar.className=navbar.className.replace("navbar-boxshadow","");
  }
}