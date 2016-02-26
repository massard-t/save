function	add_comment() {
	$('#comment_textbox').css({width: "95.8%", 'max-width': "95.8%"});
	var i = 0;
	$('#comment_validate').on("click", function() {
		++i;
		var commentaire = $('#comment_textbox').val();
		if (commentaire != "") {
			var table = $('<table>').css({
											'padding-bottom': "20px",
											'background-color': 'white',
											'border-radius': "1px",
											'box-shadow': "0 0 1px black",
											'margin-bottom': "30px",
											 color: "black",
											width: "100%"
										}).appendTo('.commentaires');
			var tr1 = $('<td>').css({'padding-right': "20px", "min-width": "100px", "padding-left": "20px"}).appendTo(table).attr("class", i);
			var tr2 = $('<td>').css({'padding-left': "20px", 'min-width': '150px'}).appendTo(table).attr("class", i);
			var edit_button = $('<input type="submit" value="Edit" class="edit_button">').attr("id", i).css({
																												height: '30px',
																												width: "80px",
																												'padding': '3px',
																												position: 'relative',
																												top: '-24px',
																												right: '-24px',
																												'background-color': '#3498db',
																												color: 'white',
																												'border-top-right-radius': "1px"																												
																												});
			var tr3 = $('<td>').css({'padding-left': "20px", width: '15px'}).appendTo(table).append(edit_button).attr("class", i);
			var today = new Date();
			var pseudo = 'Jean Patouche';
			var date_pseudo = $('<span>').appendTo(tr1).append(today + "<br>");
			$('<span>').appendTo(tr1).append("Posted by : " + pseudo);
			var disp = "type" + i; 
			commentaire = commentaire.replace(/\r?\n/g, '<br />');
			var span = $('<span>').attr("id", disp).appendTo(tr2).append(commentaire);
			$('#comment_textbox').val("").css({width: "95.8%", 'max-width': "95.8%"});

		} else {
			alert("Merci d'entrer un commentaire valide !");
		} 
		$('.edit_button').on("click", function() {
			var j = this.id;
			var type = $("#type" + j);
			type = type.php().replace(/\r?\n/g, '<br />');
			$('#comment_textbox').val(type);
			$("." + j).remove();
		});	
	});
}
add_comment();