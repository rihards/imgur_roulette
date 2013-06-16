$(document).ready(function(){

	var $container = $('#container');
	var $loadmore = $('#loadmore');
	var loadmore_count = 1;

	$.ajaxSetup({
		cache:false,
		beforeSend: function() {
			$('#indicator').show()
		},
		complete: function(){
			$('#indicator').hide()
		}
	}); 

	$.post("imgur.php", function(data) {
		$container.prepend(data);
		$container.imagesLoaded(function() {
			$container.masonry({
				columnWidth: 214,
				itemSelector: '.item',
				gutter: 10
			});
		});
	});

	$loadmore.click(function(){
		$.post("imgur.php", {counter: loadmore_count}, function(data) {
			$container.prepend(data);
			$container.imagesLoaded(function() {
				var $elements = $container.find('.item-counter-' + loadmore_count);
				$container.masonry('prepended', $elements, true);
				loadmore_count++;
			});
		});
		return false;
	});
});