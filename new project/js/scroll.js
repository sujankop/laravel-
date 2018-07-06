window.onscroll=function(){myfunction()};
function myfunction()
{
  var navbar=document.getElementById('navbar')
  if (document.body.scrollTop>300 || document.documentElement.scrollTop >300) 
  {
    navbar.className="navbar"+" navbar-default"+" navbar-fixed-top"+" color";
  }
  else
  {
    navbar.className=navbar.className.replace("color"," ");
  }
}