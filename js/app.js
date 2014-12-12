// BLONDIN ---- WHAT'S ELSE MENU v0.1

$(document).ready(function() {
	$('#hmenu>ul>li>ul').hide();

	$('#hmenu')
	.on('mouseenter','a.menuCat', function(event) {
			var $target = $(event.currentTarget);
			var itemsCount = $target.next('ul').children('li').length;
			// console.log(itemsCount);

			if (!$target.hasClass('active')) {
				var $last = $('#hmenu a.active');
				var $subMenu = $target.next('ul');
				var $lastSub = $last.next('ul');

				// Ne pas dépasser 8 éléments (ou faire modification)
				if (itemsCount>4) {
					$subMenu.css('height', '280').children('li').css('height', '50%');
				}

				$last.toggleClass('active');
				$target.toggleClass('active');
				$lastSub.stop().fadeOut(800);
				$subMenu.stop().fadeIn(800);
			};
		}
	)
	.on('mouseenter', '.hSubMenu a', function(event) {
		var $target = $(event.currentTarget);
		var $items = $('.hSubMenu a').not($target);

		$items.animate({opacity: 0.5}, 100);
		$target.animate({opacity: 1}, 100);
	})
	.on('mouseleave', function(event) {
		event.preventDefault();
		$('#hmenu>ul>li>ul').fadeOut();
		$('#hmenu>ul>li>a').removeClass('active');		
	})
	.on('mouseleave','.hSubMenu', function(event) {
		event.preventDefault();
		$('.hSubMenu a').animate({opacity: 1}, 100);
	});

});