<div ng-controller='genresCtrl' data-ng-init="getGenres()">

<table class="table">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
	</thead>
	<tbody ng-scope>
		<tr data-ng-repeat="genre in genres">
			<td>{{genre.name}}</td>
			<td>{{genre.description}}</td>
			<td><a class="btn btn-success" ng-href='{{"/genres/"+genre.id}}'>Editar</a></td>
			<td><button class="btn btn-danger" ng-click="genreDelete(genre.id)">Eliminar</button></td>
		</tr>
	</tbody>
</table>

</div>