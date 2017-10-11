function Inicio(){

	/*
	Botones de Inicio en el index.html


	*/
	//se debe de modificar esta para que haga lo mismo pero con municipio
	$("#opciones a.comu").click(function(e){
     	e.preventDefault(); //evita el evento nativo que es clic normal
        url = $(this).attr("href"); //de este hipervinculo saque el atributo href

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Comunas");
                	$("#contenido" ).html(data); //carga en contenido
        });
     });



	$("#opciones a.muni").click(function(e){
     	e.preventDefault(); //evita el evento nativo que es clic normal
        url = $(this).attr("href"); //de este hipervinculo saque el atributo href

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Municipio");
                	$("#contenido" ).html(data); //carga en contenido
        });
     });


	$("#opciones a.depa").click(function(e){
     	e.preventDefault(); //evita el evento nativo que es clic normal
        url = $(this).attr("href"); //de este hipervinculo saque el atributo href

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Deprtamentos");
                	$("#contenido" ).html(data); //carga en contenido
        });
     });

/*
Fin de Botones de inicio del index html

*/





/*
btones para cerrar las ventanas
*/


	$("#contenido").on("click","button.btncerrar",function(){
		$("#contenedor").removeClass("show");
       	$("#contenedor").addClass("hide");
	})

	$("#contenido").on("click","button.btncerrar2",function(){
		$("#titulo").html("Listado Comunas");
		$( "#contenido" ).load("./php/comuna/index.php");	
	})





/*
Botones de Borrar icono basurero 
*/


	$("#contenido").on("click","a.borrar",function(){
		//Recupera datos del formulario
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	url: "./php/comuna/controladorComuna.php",
            	data: {codigo: codigo, accion:'borrar'},
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado Comunas");
        		$( "#contenido" ).load("./php/comuna/index.php");
        	});

		}
	});
	


	$("#contenido").on("click","a.borrarMunicipio",function(){
		//Recupera datos del formulario
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	url: "./php/municipio/controladorMunicipio.php",
            	data: {codigo: codigo, accion:'borrar'},
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado Municipio");
        		$( "#contenido" ).load("./php/municipio/index.php");
        	});

		}
	});




	$("#contenido").on("click","a.borrarDepartamento",function(){
		//Recupera datos del formulario
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	url: "./php/departamento/controladorDepartamento.php",
            	data: {codigo: codigo, accion:'borrar'},
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado Deprtamentos");
        		$( "#contenido" ).load("./php/departamento/index.php");
        	});

		}
	});



/*
Final de botones Borrar
*/




/*
Botones editar icono lapiz
*/


	$("#contenido").on("click","a.editar",function(){
		$("#titulo").html("Editar Comuna");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/comuna/editarComuna.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});




		$("#contenido").on("click","a.editarMunicipio",function(){
		$("#titulo").html("Editar Municipio");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/municipio/editarMunicipio.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});
	



		$("#contenido").on("click","a.editarDepartamento",function(){
		$("#titulo").html("Editar Departamento");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"./php/departamento/editarDepartamento.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});



/*
Final Botones editar icono lapiz
*/






/*
Botones actualizar
*/


	$("#contenido").on("click","button#actualizar",function(){
		//		var comu_codi = $("#comu_codi").attr("value");
		//		var comu_nomb = $("#comu_nomb").attr("value");
		//		var muni_codi = $("#muni_codi").attr("value");
		//		var datos = "comu_codi="+comu_codi+"&comu_nomb="+comu_nomb+"&muni_codi="+muni_codi;
		
		$("#titulo").html("Listado Comunas");
        var datos=$("#fcomuna").serialize();
            $.ajax({
			type:"post",
			url:"./php/comuna/controladorComuna.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/comuna/index.php");
        	});
	});




		$("#contenido").on("click","button#actualizarMunicipio",function(){
		
		$("#titulo").html("Listado Municipio");
        var datos=$("#fmunicipio").serialize();
            $.ajax({
			type:"post",
			url:"./php/municipio/controladorMunicipio.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/municipio/index.php");
        	});
	});



		$("#contenido").on("click","button#actualizarDepartamento",function(){
		
		$("#titulo").html("Listado Departamento");
        var datos=$("#fdepartamento").serialize();
            $.ajax({
			type:"post",
			url:"./php/departamento/controladorDepartamento.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("./php/departamento/index.php");
        	});
	});


/*
Final Botones actualizar
*/







/*
Botones nuevos
*/

	
	$("#contenido").on("click","button#nuevo",function(){
		$("#titulo").html("Nueva Comuna");
		$( "#contenido" ).load("./php/comuna/nuevaComuna.php");	
	})




	$("#contenido").on("click","button#nuevoMuni",function(){
		$("#titulo").html("Nuevo Departamento");
		$( "#contenido" ).load("./php/municipio/nuevoMunicipio.php");	
	})



	$("#contenido").on("click","button#nuevoDepa",function(){
		$("#titulo").html("Nuevo Departamento");
		$( "#contenido" ).load("./php/departamento/nuevoDepartamento.php");	
	})


/*
Final Botones nuevos
*/






/*
Botones grabar
*/


	
	$("#contenido").on("click","button#grabar",function(){
		
		var datos=$("#fcomuna").serialize();//sobre el formulario mete todos los controles en una variable
	
		$.ajax({
			type:"post",
			url:"./php/comuna/controladorComuna.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Comunas");
				$("#contenido" ).load("./php/comuna/index.php");
			}
		})
	});	



		$("#contenido").on("click","button#grabarMuni",function(){
		
		var datos=$("#fmunicipio").serialize();//sobre el formulario mete todos los controles en una variable
	
		$.ajax({
			type:"post",
			url:"./php/municipio/controladorMunicipio.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Municipio");
				$("#contenido" ).load("./php/municipio/index.php");
			}
		})
	});	



		$("#contenido").on("click","button#grabarDepa",function(){
		
		var datos=$("#fdepartamento").serialize();//sobre el formulario mete todos los controles en una variable
	
		$.ajax({
			type:"post",
			url:"./php/departamento/controladorDepartamento.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Departamentos");
				$("#contenido" ).load("./php/departamento/index.php");
			}
		})
	});




/*
Final Botones grabar
*/

}