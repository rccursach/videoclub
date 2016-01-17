<div ng-controller='genresCtrl' data-ng-init="getGenres()">

<table class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody ng-scope>
		<tr data-ng-repeat="genre in genres">
			<td>{{genre.name}}</td>
			<td>{{genre.description}}</td>
			<td><button type="button">Edit</button></td>
			<td><button type="button">Delete</button></td>
		</tr>
	</tbody>
</table>

</div>