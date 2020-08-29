$(document).ready(function() {
    $('[data-toggle="popover"]').popover({
        trigger: 'hover',
        html: true
    });
    $('.carousel').carousel({
	  interval: 2000
	});

	var links = document.querySelectorAll('.page-item > a')

	links.forEach(function(element, index, array){
	    element.classList.add('page-link')
	  });

});