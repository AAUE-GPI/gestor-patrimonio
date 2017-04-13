

<div class="container" style="color: white">
	<form method="post">
		<div class="form-group">
			<label>Nome do requsitor:</label>
	  		<input type="text" name="user"  style="width:300px" class="form-control" id="usr">
		</div>
		<div class="form-group">
	  		<label>Marca do Carro:</label>
	  		<input name="marcaCarro" type="text" style="width: 300px" class="form-control" id="marcaCarro">
		</div>
		<div class="form-group">
			<label>Número carta condução</label>
			<input name="conducao" type="number" style="width: 300px" class="form-control" id="cartaCondução">
		</div>

		<div class="form-group">
			<label>Número cartão cidadão</label>
			<input name="cc" type="text" style="width: 300px" class="form-control" id="cc">
		</div>

		



		<div class="form-group row">
			<div class="col col-xs-6">
				<label>Data Inicial</label>
				<input name="dataInicial" type="datetime-local" style="width: 300px" class="form-control" id="dataInicial" >
			</div>
			<div class="col col-xs-6">
				<label>Data Final</label>
				<input name="dataFinal" type="datetime-local" style="width: 300px" class="form-control" id="dataFinal">
			</div>
		</div>

		<div class="form-group row">
			<div class="col-xs-6">
				<label>Km Inicial</label>
				<input name="kmInicial" type="number" style="width: 300px" class="form-control" id="kmInicial">
			</div>
			<div class="col-xs-6">
				<label>Km Final</label>
				<input name="kmFinal" type="number" style="width: 300px" class="form-control" id="kmFinal">
			</div>
		</div>



		
		<button type="submit" name="login" value="login" class="btn btn-primary">Login</button>
		<button type="submit" name="login" value="registar" class="btn btn-primary">Registar</button>

	</form>
</div>

</form>