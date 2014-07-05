$(function(){
    

var sajjita;
var path;
$('div[id^=zz]').click(function(){
sajjita=$(this).attr('id');
path="wtiles";
//alert(sajjita.substring(2));
//alert($(this).attr('id'));

});
$('div[id^=zk]').click(function(){
sajjita=$(this).attr('id');
path="floortiles";
//alert(sajjita.substring(2));
//alert($(this).attr('id'));

});
$('div[id^=a]').click(function(){
//var sajjita="new";
//alert($(this).attr('id'));
//alert(sajjita.substring(2));

//$(this).css("background-image","url(any"+sajjita.substring(2)+".jpg)");
$(this).html("<img src=\""+path+"/tile"+sajjita.substring(2)+".jpg\" height=\"36\" width=\"36\" />");

});

var dftile,dwtile,wall;
$('div[id^=kk]').click(function(){
	$.session.set("dftile",$(this).attr('id'));
	
	
});
$('div[id^=ll]').click(function(){
	alert($(this).attr('id').substring(2));
	$.session.set("dwtile",$(this).attr('id').substring(2));
	
});



    
});
