<div ng-controller='directorsCtrl' data-ng-init="getDirectors()">

<table class="table">
	<thead>
		<tr>
			<th>
				id
			</th>
			<th>
				Nombre
			</th>
			<th>
				Apellido
			</th>
			<th>
				Editar
			</th>
			<th>
				Eliminar
			</th>
		</tr>
	</thead>
	<tbody ng-scope>
		<tr data-ng-repeat="director in directors">
			<td>
				{{director.id}}
			</td>
			<td>
				{{director.name}}
			</td>
			<td>
				{{director.surname}}
			</td>
			<td>
				<button class="btn btn-alert">Editar</button>
			</td>
			<td>
				<button class="btn btn-danger">Eliminar</button>
			</td>
		</tr>
	</tbody>
</table>
</div>