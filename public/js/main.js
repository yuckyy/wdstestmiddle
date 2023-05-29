
var navbar = document.querySelector('.navbar');
var initialPaddingTop = parseInt(getComputedStyle(navbar).paddingTop, 10);
var initialPaddingBottom = parseInt(getComputedStyle(navbar).paddingBottom, 10);
window.addEventListener('scroll', function() {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    navbar.style.paddingTop = (initialPaddingTop - scrollTop) + 'px';
    navbar.style.paddingBottom = (initialPaddingBottom - scrollTop) + 'px';
});
document.querySelector('.dropdown').addEventListener('show.bs.dropdown', function(event) {
    event.preventDefault();
});
