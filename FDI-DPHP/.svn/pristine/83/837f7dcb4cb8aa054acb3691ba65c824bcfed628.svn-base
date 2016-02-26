function	products_sort() {
	$('.alphabetical').on('click', function() {
		var object = $(".sort_item");
		var count = 0;
		object.sort(function (a, b) {
       		if(a > b) {
        		return (1);
    		} else if(a < b) {
        		return (-1);
    		} else {
        		return (0);
    		}
		});
		$('tbody').empty();
		var i = 1;
		while (object[i]) {
			var save = object[i].innerHTML;
			$('tbody').append(save);
			++i;
		};
		$('.alphabetical').css({display: "none"});
		$('.reload').css({display: "inline-block"});
	});
	$('.reload').on('click', function() {
		document.location.reload(true);
	});
}
products_sort();