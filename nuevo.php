<div class="row">
	<div class="col-md-8">
		<h1>Sumar Dos Numeros</h1>
		<!--
		Numero 1:
		<input type="text" id="num1" name="num1" />
		<h2>+</h2>
		Numero 2:
		<input type="text" id="num2" name="num2" />
		<h2>=</h2>
		<h1 class="text-primary" id="h1Resultado"></h1>
		<button class="btn btn-primary" id="btnSumar">Sumar</button>
		-->

		<form class="form-horizontal" name='fregistro' id='fregistro' role='form'>

			<div class="form-group">
				<label for="num1" class="col-sm-2 control-label">Numero 1 :</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="num1" name="num1"  placeholder="Primer Numero" maxlength="5" autofocus>
				</div>
			</div>

			<div class="form-group">
				<label for="num2" class="col-sm-2 control-label">Numero 2 :</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="num2" name="num2" placeholder="Segundo Numero" maxlength="5">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-6 ">
					<button class="btn btn-primary" id="btnSumar">Sumar</button>
				</div>
			</div>


		</form>

	</div>
	<div class="col-md-4">
		<div class="alert alert-success">
			<h1 class="text-primary" id="h1Resultado"></h1>
		</div>
	</div>
</div>
