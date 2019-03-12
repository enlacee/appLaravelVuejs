<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Usuarios</title>

		<!-- Fonts -->
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<!-- Styles -->
		<style>
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1>Usuarios</h1>

			</div>

			<div class="row">
				<table  class="table">
				<thead>
					<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Apellidos</th>
					<th scope="col">Opciones</th>
					</tr>
				</thead>
					<tr>
						<td>1</td>
						<td>juan carlos</td>
						<td>rios solis</td>
						<td>
							<button class="btn btn-primary">Editar</button>
							<button class="btn btn-primary btn-danger">Eliminar</button>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<script type="text/javascript" src="js/app.js"></script>
	</body>
</html>
