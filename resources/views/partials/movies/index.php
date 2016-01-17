<div ng-controller="moviesCtrl" data-ng-init="getMovies()">

<table class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Year</th>
			<th>Genre Id</th>
			<th>Director Id</th>
		</tr>
	</thead>
	<tbody ng-scope>

		<tr data-ng-repeat="movie in movies">
			<td>{{movie.name}}</td>
			<td>{{movie.year}}</td>
			<td>{{movie.genre_id}}</td>
			<td>{{movie.director_id}}</td>
			<td><button type="button">Edit</button></td>
			<td><button type="button">Delete</button></td>
		</tr>

	<!--
		<tr>
			<td>Star Wars: Episode IV - A New Hope</td>
			<td>1977</td>
			<td>Sci-Fi Fantasy</td>
			<td>George Lucas</td>
			<td><button type="button">Edit</button></td>
			<td><button type="button">Delete</button></td>
		</tr>
		<tr>
			<td>Lord Of The Rings - The Fellowship of the Ring</td>
			<td>2001</td>
			<td>Fantasy</td>
			<td>Peter Jackson</td>
			<td><button type="button">Edit</button></td>
			<td><button type="button">Delete</button></td>
		</tr>
		<tr>
			<td>Titanic</td>
			<td>1997</td>
			<td>Romance, Drama</td>
			<td>James Cameron</td>
			<td><button type="button">Edit</button></td>
			<td><button type="button">Delete</button></td>
		</tr>
	-->
	</tbody>
</table>

</div>