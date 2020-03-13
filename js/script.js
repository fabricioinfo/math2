
$(document).ready(function(){
	$("#noturno").click(function(){
		$("body").removeClass( "bg-blue-light claro" ).addClass( "noturno" );
		$("nav").removeClass( "bg-light bg-light-claro" ).addClass( "bg-light-not" );
	});
	$("#color").click(function(){
		$("body").removeClass( "noturno claro" ).addClass( "bg-blue-light" );
		$("nav").removeClass( "bg-light-not bg-light-claro" ).addClass( "bg-light" );
	});
	$("#claro").click(function(){
		$("body").removeClass( "noturno bg-blue-light" ).addClass( "claro" );
		$("nav").removeClass( "bg-light-not bg-light" ).addClass( "bg-light-claro" );
	});

	function getImg(tipo){
		if(tipo == 1){
			$("#equacao").html("Teorema de Pitágoras");
			$("#img_equacao").attr("src","img/hipo.png");
		}else if(tipo == 2){
			$("#equacao").html("Área de um Circulo");
			$("#img_equacao").attr("src","img/circulo.png");
		}else if(tipo == 3){
			$("#equacao").html("Área de um Triângulo");
			$("#img_equacao").attr("src","img/triangulo.png");
		}else if(tipo == 4){
			$("#equacao").html("Área de um Quadrado");
			$("#img_equacao").attr("src","img/quadrado.png");
		}else{
			$("#equacao").html("Equação do Segundo Grau");
			$("#img_equacao").attr("src","img/bask.png");
		}
	}
	getImg(1);
	$("#valores").html(
				"<div class='form-group'>"+
				"<label for='a'>Cateto Oposto</label>"+
				"<input class='form-control' type='text' id='a' name='a'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<label for='b'>Cateto Adjacente</label>"+
				"<input class='form-control' type='text' id='b' name='b'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<input class='form-control' type='hidden' id='c' name='c' value=''>"+
				"</div>");
	$("#escolhas").submit(function(e) {
        //prevent Default functionality
        e.preventDefault();
        var tipo= $("#tipo").val();
        var a= $("#a").val();
        var b= $("#b").val();
        var c= $("#c").val();
        $.ajax({
		  method: "GET",
		  url: "bibliotecas/math.php?tipo="+tipo+"&a="+a+"&b="+b+"&c="+c
		})
		  .done(function( msg ) {
		    $("#texto").html(msg);
		  });

		$.ajax({
		  method: "GET",
		  url: "bibliotecas/passos.php?tipo="+tipo
		})
		  .done(function( msg ) {
		    $("#passos").html(msg);
		  });
		$("#passos").toggle();
		$("#texto").toggle();
    });
    $(".info").click(function(){

    	$("#informacao").toggle();
    	informa();
	   
    });$(".equa").click(function(){
    	var tipo= $("#tipo").val();
    	getImg(tipo);
    	$("#equacao").toggle();

    	$("#img_equacao").toggle();
	   
    });
function informa(){
	var tipo= $("#tipo").val();
    	$.ajax({
			  method: "GET",
			  url: "bibliotecas/info.php?tipo="+tipo
			})
			  .done(function( msg ) {
			    $("#informacao").html(msg);
			  });
}

	$("#tipo").change(function(){
		$("#texto").hide();
		$("#passos").hide();
		informa();
		var tipo= $("#tipo").val();
		getImg(tipo);
		if(tipo == 1){
			
			$("#valores").html(
				"<div class='form-group'>"+
				"<label for='a'>Cateto Oposto</label>"+
				"<input class='form-control' type='text' id='a' name='a'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<label for='b'>Cateto Adjacente</label>"+
				"<input class='form-control' type='text' id='b' name='b'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<input class='form-control' type='hidden' id='c' name='c'>"+
				"</div>");
		}else if(tipo == 2){
			$("#valores").html(
				"<div class='form-group'>"+
				"<label for='a'>Raio</label>"+
				"<input class='form-control' type='text' id='a' name='a'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<input class='form-control' type='hidden' id='b' name='b'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<input class='form-control' type='hidden' id='c' name='c'>"+
				"</div>");
		}else if(tipo == 3){
			$("#valores").html(
				"<div class='form-group'>"+
				"<label for='a'>Base</label>"+
				"<input class='form-control' type='text' id='a' name='a'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<label for='b'>Altura</label>"+
				"<input class='form-control' type='text' id='b' name='b'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<input class='form-control' type='hidden' id='c' name='c'>"+
				"</div>");
		}else if(tipo == 4){
			$("#valores").html(
				"<div class='form-group'>"+
				"<label for='a'>Comprimento</label>"+
				"<input class='form-control' type='text' id='a' name='a'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<label for='b'>Altura</label>"+
				"<input class='form-control' type='text' id='b' name='b'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<input class='form-control' type='hidden' id='c' name='c'>"+
				"</div>");
		}else if(tipo == 5){
			$("#valores").html(
				"<div class='form-group'>"+
				"<label for='a'>Valor de a</label>"+
				"<input class='form-control' type='text' id='a' name='a'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<label for='b'>Valor de b</label>"+
				"<input class='form-control' type='text' id='b' name='b'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<label for='c'>Valor de c</label>"+
				"<input class='form-control' type='text' id='c' name='c'>"+
				"</div>");
		}else if(tipo == 6){
			$("#valores").html(
				"<div class='form-group'>"+
				"<label for='a'>Amostras (Separadas por ;)</label>"+
				"<input class='form-control' type='text' id='a' name='a'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<input class='form-control' type='hidden' id='b' name='b'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<input class='form-control' type='hidden' id='c' name='c'>"+
				"</div>");
		}else if(tipo == 7){
			$("#valores").html(
				"<div class='form-group'>"+
				"<label for='a'>Primeiro Termo</label>"+
				"<input class='form-control' type='text' id='a' name='a'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<label for='a'>Último Termo</label>"+
				"<input class='form-control' type='text' id='b' name='b'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<label for='a'>Nº de Termos</label>"+
				"<input class='form-control' type='texto' id='c' name='c'>"+
				"</div>");
		}else if(tipo == 8){
			$("#valores").html(
				"<div class='form-group'>"+
				"<label for='a'>Qual termo você deseja?</label>"+
				"<input class='form-control' type='text' id='a' name='a'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<input class='form-control' type='hidden' id='b' name='b'>"+
				"</div>"+
				"<div class='form-group'>"+
				"<input class='form-control' type='hidden' id='c' name='c'>"+
				"</div>");
		}
	});
});