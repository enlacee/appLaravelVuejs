<template>
	<div class="container">

		<div class="row">
			<h1>{{ dataTitle }}</h1>

		</div>
		<div class="row ">
			<div class="col-md-12">

				<table  class="table">
					<thead>
						<tr>
						<th scope="col">#</th>
						<th scope="col">Nombre</th>
						<th scope="col">Email</th>
						<th scope="col">Opciones</th>
						</tr>
					</thead>

					<tr v-for="user in lists">
						<td>{{ user.id }}</td>
						<td>{{ user.name }}</td>
						<td>{{ user.email }}</td>
						<td>
							<button class="btn btn-primary">Editar</button>
							<button class="btn btn-primary btn-danger">Eliminar</button>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		data: function(){
			return {
				lists:[
					{name:'pepe',email:'correo@pprios.com'},
					{name:'pepe2',email:'correo2@pprios.com'}
				],
				dataTitle: 'Lista de Usuarios'
			}
		},
		methods: {
			loadUsers: function() {
				// https://jsonplaceholder.typicode.com/users
				this.$http.get( 'http://127.0.0.1:8000/api/usuarios' ).then( function( response ){
					if ( response.status === 200 ) {
						this.lists = response.body;
					} else {
						this.lists = [];
					}
				});
			}
		},
		mounted() {
			console.log('Component USER mounted.');
		},
		created: function() {
			this.loadUsers();
		}
	};
</script>
