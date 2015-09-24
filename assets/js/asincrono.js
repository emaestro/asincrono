
$(
	function () {

		/**************************************************************************************************
		 *	Implementamos el evento Click de la opción de Menú Nuevo
		 *	Tambien implementamos una función anonima de retrollamada el cual se encarga de realizar la
		 *	Suma 
		 **************************************************************************************************/
		$("#a-nuevo").on("click", function(){
			$("#divPrincipal").load("nuevo.php", function (){
				$("#btnSumar").on("click", function(e){
					// Antes de realizar la Suma hacemos una conversion de Tipos a Enteros
					//var resultado = parseInt($("#num1").val()) + parseInt($("#num2").val())

					// Si el usuario ingresara numeros con decimales podemos realizar la conversion 
					// usando parseFloat
					var resultado = parseFloat($("#num1").val()) + parseFloat($("#num2").val())

					$("#h1Resultado").html("La suma es: " + resultado)
					e.preventDefault();
				});
			});
		});

		/**************************************************************************************************
		 *	Implementamos el evento Click de la opción de Menú Listado
		 **************************************************************************************************/
		$("#a-listado").on("click", function(){
			$("#divPrincipal").load("listado.php");
		});
		/**************************************************************************************************
		 *	Implementamos el evento Click de la opción de Menú Listado
		 **************************************************************************************************/
		$("#a-acercade").on("click", function(){
			$("#divPrincipal").load("acercade.php");
		});
		/**************************************************************************************************
		 *	Implementamos el evento Click de la opción de Menú Contacto
		 **************************************************************************************************/
		$("#a-contacto").on("click", function(){
			$("#divPrincipal").load("contacto.php", function(){
				var table = $('<table></table>').addClass('table');
				for (r = 1; r < 5; r++) {
					var row = $('<tr></tr>');
					for (i = 1; i < 6; i++) {
						var data = $('<td></td>').text('dato ' + r + ',' + i);
						table.append(row);
		                row.append(data);
					}
				}
				$('#divPrincipal').append(table);

			});
		});
		/**************************************************************************************************
		 *	Implementamos el evento Click de la opción de Menú Salir
		 **************************************************************************************************/
		$("#a-salir").on("click", function(){
			$("#divPrincipal").load("salir.php");
		});
	}
);
