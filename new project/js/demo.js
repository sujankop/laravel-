window.onscroll=function(){myfunction()};
function myfunction()
{
	var a=document.getElementById('n');
	var b=document.getElementById('mynav');
	var c=document.getElementById('borderli');
	if (document.body.scrollTop > 80 || document.documentElement.scrollTop >  80)
	  {
	  	a.className="transparent";
	  	b.className="collapse"+" transparent";
	  	c.className="borderli";
	  }
	else
	 {
	 	a.className=a.className.replace("transparent","");
	 	b.className=b.className.replace("transparent","");
	 	c.className=c.className.replace("borderli","");
	 }
}