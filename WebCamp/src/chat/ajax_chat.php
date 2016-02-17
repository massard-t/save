<?php session_start(); ?>
<script src="../../includes/jquery.js"></script>
<div class="contenu_dyna" id="contenu_dyna"></div>
<script> 
function charger(){
	setTimeout( function(){
			$.ajax({
    			async: true,
    			type: 'POST',
    			url: 'chat.php',
    			success: function(data){
    			$("#contenu_dyna").html(data);
    		   }
   		  	});
  	  charger();
	}, 5000);
}
charger();
</script>