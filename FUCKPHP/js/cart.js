function	add_content (asked) {
	var content = {
		"reader_pdf":{
			'title':"PDF Segreader",
			'content':"Our PDF Segreader is based on the most accurate pdf reading knowledge. This means that it will be able to read every pdf you want, without ever crashing, nor doing incorrect actions.",
			'qty':Cookies.get(asked),
			'price':17,
			'total':(Cookies.get(asked) * 17)
		},
		"pics":{
			'title':"Well Shot",
			'content':"Well Shot is currently the best picture software on the market. It is used by some major photographer, known as the best in their domains. ",
			'qty':Cookies.get(asked),
			'price':35,
			'total':(Cookies.get(asked) * 35)
		},
		"mail":{
			'title':"Thunder Sparrow",
			'content':"Thunder Sparrow is currently the best email client, auto-proclaimed, of all time. You can pretty much do everything you'd want to do with it, because it can handle every plugin extension available on the internet",
			'qty':Cookies.get(asked),
			'price':45,
			'total':(Cookies.get(asked) * 45)
		},
		"database":{
			'title':"My SegSQL",
			'content':"Manage your data in an out-of-the-box way! Works on every OS, doesn't need electricity, brilliant software of ours.",
			'qty':Cookies.get(asked),
			'price':25,
			'total':(Cookies(asked) * 25)
		}
	};
	return (content[asked]);
}

function	init_cart () {
	var cart = Cookies.get();
	var content = ["mail", "reader_pdf","pics","database"];
	for (elem in content) {
		var nomore = "#" + content[elem];
		if (!Cookies.get(content[elem]) > 0) {
			$(nomore).css({'display': 'none'});
		}
		else {
			$(nomore).removeClass('hidden');
		}
	}

	for (item in cart) {
		if (cart[item] > 0){
			var tmp = "#" + item;
			$(tmp).addClass('hidden');
		}
		else {
			Cookies.remove(item);
		}
	}

	return (cart);
}
function	quantity () {
	var content = ["mail", "reader_pdf","pics","database"];
	for (elem in content) {
		var nomore = "#" + content[elem];
	}
}
init_cart();
quantity();
console.log("Pour le panier, nous n'avons pas reussi a l'implanter. cependant, nous avons consitute une pseudo base de donne basee sur les cookies presents.");