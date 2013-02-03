$(document).ready(function(){
	var imageData = [
	{
		img:'vegi/v1.png',
		cls:'vegi'
	},
	{
		img:'vegi/v2.png',
		cls:'vegi'
	},
	{
		img:'vegi/v5.png',
		cls:'vegi'
	},
	{
		img:'vegi/v6.png',
		cls:'vegi'
	},
	{
		img:'vegi/v7.png',
		cls:'vegi'
	},
	{
		img:'vegi/v8.png',
		cls:'vegi'
	},
	{
		img:'fr/f1.png',
		cls:'fr'
	},
	{
		img:'fr/f2.png',
		cls:'fr'
	},
	{
		img:'fr/f3.png',
		cls:'fr'
	},
	{
		img:'fr/f4.png',
		cls:'fr'
	},
	{
		img:'fr/f5.png',
		cls:'fr'
	},
	{
		img:'fr/f6.png',
		cls:'fr'
	}

	];  
	var images = shuffle(imageData);
	var totalVegi = 0;
	var basketVegi = 0;
	var totalFr = 0;
	var basketFr = 0;

	for (var i = 0; i < images.length; i++) {
		var image = images[i];
		$("#fr_vegi").append("<img class='" + image.cls + "' src='img/"+ image.img + "'/>");
		if (image.cls === 'vegi') {
			totalVegi++;
			//console.log(totalVegi);
		};
		if (image.cls === "fr") {
			totalFr++;
		};

	};	

	function revertFunction(obj){
		if (!obj) {
			//alert("Oopsss... Try Again..");
			$("#sad_face").show().position({
					my: "center",
  					at: "center",
   					of: $(window)
				}).delay(800).hide(400);
			return true;
		} else {
			return false;
		}
		
	}


	$(".vegi").draggable({revert: revertFunction});
	$("#vegi_basket").droppable({  
		accept: ".vegi",
		drop: function(event,ui){
			basketVegi++;
			//ui.draggable.draggable("destroy");
			//console.log(totalVegi,basketVegi);
			if (basketVegi === totalVegi) {
				//alert("Good Job!!!");
				//$("#face").dialog();
				$("#face_vegi").show().position({
					my: "center",
  					at: "center",
   					of: $(this)
				});
				
			};
		}
	});

	
	
	$(".fr").draggable({revert: revertFunction});
	$("#fruits_basket").droppable({  
		accept: ".fr",
		drop: function(){
			basketFr++;
			//ui.draggable.draggable("destroy");
			//console.log(totalVegi,basketVegi);
			if (basketFr === totalFr) {
				//alert("Good Job!!!");
				$("#face_fr").show().position({
					my: "center",
  					at: "center",
   					of: $(this)
				});
			};
		}
	});
	




});

function shuffle(o){ //v1.0
	for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
		return o;
};