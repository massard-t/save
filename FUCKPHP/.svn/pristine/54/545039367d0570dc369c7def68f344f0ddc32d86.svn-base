function	count () {
	var tab = Cookies.get();
	var i = 0;
	for (element in tab) {
		i = i + parseInt(tab[element]);
	}
	if (i == 0) {
		i = "empty";
	}
	$(".count").text(i);
	return (i);
}

function	clear_cookies() {
	var tab = Cookies.get();
	for (element in tab) {
		Cookies.remove(element);
	}
}

function	increment_cart () {
	$('.count').css({'font-size': 'small'})
	$('.add_to_cart').on('click', function() {
		var re = /([a-z]+).svg/;
		var name = re.exec(this.parentNode.innerHTML);
		if (name == null){
			name = re.exec(this.parentNode.parentNode.parentNode.innerHTML);
		}
		if (!Cookies.get(name[1]) >= 1) {
			Cookies.set(name[1], 1);
			var tab = Cookies.get();
			}
		else {
			var tmp = Cookies.get(name[1]);
			tmp = parseInt(tmp) + 1;
			Cookies.remove(name[1]);
			Cookies.set(name[1], tmp);
		}
		$('.count').text(count());
	});
}
count();
increment_cart();