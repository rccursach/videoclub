<div ng-controller='directorsCtrl' data-ng-init="getDirectors()">

<table class="table">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
	</thead>
	<tbody ng-scope>
		<tr data-ng-repeat="director in directors">
			<td>{{director.name}}</td>
			<td>{{director.surname}}</td>
			<td><a class="btn btn-success" ng-href='{{"/directors/"+director.id}}'>Editar</a></td>
			<td><button class="btn btn-danger" ng-click="directorDelete(director.id)">Eliminar</button></td>
		</tr>
	</tbody>
</table>
</div>