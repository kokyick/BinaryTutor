$('body').prepend('<a href="#" class="back-to-top"></a>');

var amountScrolled = 300;

$(window).scroll(function() {
console.log($(window).scrollTop());
if ( $(window).scrollTop() > amountScrolled ) {
 $('a.back-to-top').fadeIn('slow');
} else {
 $('a.back-to-top').fadeOut('slow');
}
});

$('a.back-to-top').click(function() {
$('html, body').animate({
 scrollTop: 0
}, 700);
return false;
});
