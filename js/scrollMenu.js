$("document").ready(function($){
var nav = $('.nav-container');

$(window).scroll(function(){
if ($(this).scrollTop()>136){
nav.addClass("f-nav");
} else{
	nav.removeClass("f-nav");
	}
});

});

.f-nav{
z-index:9999;
position:fixed;
left:0; top:0;
width:100%;
}