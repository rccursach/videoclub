va = angular.module('videoclubApp.controllers', []);

va.controller('directorsCtrl', ['$scope', '$http', '$location', '$routeParams', '$resource',
	function($scope, $http, $location, $routeParams, $resource){
		
		$scope.getDirectors = function() {
			$http.get('/api/v1/directors').success(function(response){
				$scope.directors = response;
			});
		};

		$scope.directorSave = function() {
			if($scope.director === undefined ){
				alert("debe llenar todos los campos");
			}
			else {
				var Director = $resource('/api/v1/directors');
				Director.save($scope.director,
				function(response){
					alert("Se guardó con exito");
					$location.path('/directors');
					highlightSearch(); //Highlights the menu of /resource list
				},
				function(response){
					alert("No se pudo guardar, complete todos los campos o espere un momento y vuelva a intentarlo.");
					if(response.message != undefined){
						alert(response.message);
					}
				});
			}
		};

		$scope.getId = function() {
			var director_id = $routeParams.director_id;
			var Director = $resource('/api/v1/directors/:id', { id : '@id'});
			Director.get({id: director_id}, function(director, getResponseHeaders){
				$scope.director = director;
			});
		}

		$scope.directorUpdate = function() {
			if($scope.director === undefined ){
				alert("debe llenar todos los campos");
			}
			else {
				var Director = $resource('/api/v1/directors/:id', { id : '@id'}, { update: { method:'PUT' }});
				Director.update($scope.director,
				function(response){
					alert("Se guardó con exito");
					$location.path('/directors');
					highlightSearch(); //Highlights the menu of /resource list
				},
				function(response) {
					alert("No se pudo guardar, complete todos los campos o espere un momento y vuelva a intentarlo.");
					if(response.message != undefined){
						alert(response.message);
					}
				});
			}
		};

		$scope.directorDelete = function(_id) {
			var __id =parseInt(_id);
			if(__id){
				if(confirm("Eliminar #"+__id+"?")){
					var Director = $resource('/api/v1/directors/:id', { id : '@id'});
					Director.delete({id:__id},
					function(response){
						alert("El director con id "+__id+" ha sido eliminado");

						var g = $scope.directors;
						for (var i = g.length - 1; i >= 0; i--) {
							if(g[i].id == __id){
								g.splice(i, 1);
								break;
							}
						};
					},
					function(response) {
						alert("No se pudo eliminar, espere un momento y vuelva a intentarlo.");
						if(response.message != undefined){
							alert(response.message);
						}
					});
				}
				
			}
		};

	}
]);

va.controller('genresCtrl', ['$scope', '$http', '$location', '$routeParams', '$resource',
	function($scope, $http, $location, $routeParams, $resource){

		$scope.getGenres = function() {
			$http.get('/api/v1/genres').success(function(response){
				$scope.genres = response;
			});
		};

		$scope.genreSave = function() {
			if($scope.genre === undefined ){
				alert("debe llenar todos los campos");
			}
			else {
				var Genre = $resource('/api/v1/genres');
				Genre.save($scope.genre,
				function(response){
					alert("Se guardó con exito");
					$location.path('/genres');
					highlightSearch(); //Highlights the menu of /resource list
				},
				function(response) {
					alert("No se pudo guardar, complete todos los campos o espere un momento y vuelva a intentarlo.");
					if(response.message != undefined){
						alert(response.message);
					}
				});
			}
		};

		$scope.getId = function() {
			var genre_id = $routeParams.genre_id;
			var Genres = $resource('/api/v1/genres/:id', { id : '@id'});
			Genres.get({id: genre_id}, function(genre, getResponseHeaders){
				$scope.genre = genre;
			});
		}

		$scope.genreUpdate = function() {
			if($scope.genre === undefined ){
				alert("debe llenar todos los campos");
			}
			else {
				var Genres = $resource('/api/v1/genres/:id', { id : '@id'}, { update: { method:'PUT' }});
				Genres.update($scope.genre,
				function(response){
					alert("Se guardó con exito");
					$location.path('/genres');
					highlightSearch(); //Highlights the menu of /resource list
				},
				function(response) {
					alert("No se pudo guardar, complete todos los campos o espere un momento y vuelva a intentarlo.");
					if(response.message != undefined){
						alert(response.message);
					}
				});
			}
		};

		$scope.genreDelete = function(_id) {
			var __id =parseInt(_id);
			if(__id){
				if(confirm("Eliminar #"+__id+"?")){
					var Genre = $resource('/api/v1/genres/:id', { id : '@id'});
					Genre.delete({id:__id},
					function(response){
						alert("El genero con id "+__id+" ha sido eliminado");
						//$location.path('/');
						//$location.path('/genres');
						var g = $scope.genres;
						for (var i = g.length - 1; i >= 0; i--) {
							if(g[i].id == __id){
								g.splice(i, 1);
								break;
							}
						};
						highlightSearch(); //Highlights the menu of /resource list
					},
					function(response) {
						alert("No se pudo eliminar, espere un momento y vuelva a intentarlo.");
						if(response.message != undefined){
							alert(response.message);
						}
					});
				}
				
			}
		};
	}
]);
va.controller('moviesCtrl', ['$scope', '$http', '$location', '$routeParams', '$resource', '$log',
	function($scope, $http, $location, $routeParams, $resource, $log){

		$scope.movie = {};
		//$scope.directors = [];
		//$scope.genres = [];

		$scope.getMovies = function() {
			$http.get('/api/v1/movies').success(function(response){
				$scope.movies = response;
				for (var i = $scope.movies.length - 1; i >= 0; i--) {
					$http.get('/api/v1/directors/'+$scope.movies[i].director_id).success(function(response){
						for (var i = $scope.movies.length - 1; i >= 0; i--) {
							if($scope.movies[i].director_id == response.id){
								$scope.movies[i].director = response;
							}
						};
					});
					$http.get('/api/v1/genres/'+$scope.movies[i].genre_id).success(function(response){
						for (var i = $scope.movies.length - 1; i >= 0; i--) {
							if($scope.movies[i].genre_id == response.id){
								$scope.movies[i].genre = response;
							}
						};
					});
				};
			});
		};

		$scope.getOptions = function() {
			$http.get('/api/v1/directors').success(function(response){
				$scope.directors = response;
			});
			$http.get('/api/v1/genres').success(function(response){
				$scope.genres = response;
			});
		};

		$scope.movieSave = function() {
			if($scope.movie === undefined ){
				alert("debe llenar todos los campos");
			}
			else {
				var Movie = $resource('/api/v1/movies');
				Movie.save($scope.movie,
				function(response){
					alert("Se guardó con exito");
					$location.path('/movies');
					highlightSearch(); //Highlights the menu of /resource list
				},
				function(response) {
					alert("No se pudo guardar, complete todos los campos o espere un momento y vuelva a intentarlo.");
					if(response.message != undefined){
						alert(response.message);
					}
				});
			}
		};

		$scope.getId_ = function() {
			var movie_id = $routeParams.movie_id;
			var Movies = $resource('/api/v1/movies/:id', { id : '@id'});
			Movies.get({id: movie_id}, function(movie, getResponseHeaders){
				$scope.movie = movie;
			});
		}

		$scope.movieUpdate = function() {
			if($scope.movie === undefined ){
				alert("debe llenar todos los campos");
			}
			else {
				var Movies = $resource('/api/v1/movies/:id', { id : '@id'}, { update: { method:'PUT' }});
				Movies.update($scope.movie,
				function(response){
					alert("Se guardó con exito");
					$location.path('/movies');
					highlightSearch(); //Highlights the menu of /resource list
				},
				function(response) {
					alert("No se pudo guardar, complete todos los campos o espere un momento y vuelva a intentarlo.");
					if(response.message != undefined){
						alert(response.message);
					}
				});
			}
		};

		$scope.movieDelete = function(_id) {
			var __id =parseInt(_id);
			if(__id){
				if(confirm("Eliminar #"+__id+"?")){
					var Movies = $resource('/api/v1/movies/:id', { id : '@id'});
					Movies.delete({id:__id},
					function(response){
						alert("La película con id "+__id+" ha sido eliminada");

						var g = $scope.movies;
						for (var i = g.length - 1; i >= 0; i--) {
							if(g[i].id == __id){
								g.splice(i, 1);
								break;
							}
						};
					},
					function(response) {
						alert("No se pudo eliminar, espere un momento y vuelva a intentarlo.");
						if(response.message != undefined){
							alert(response.message);
						}
					});
				}
				
			}
		};

	}
]);

va.controller('clientsCtrl', ['$scope', '$http', '$location', '$routeParams',
	function($scope, $http, $location, $routeParams){

		$scope.getClients = function(){
			$http.get('/api/v1/clients').success(function(response){
				$scope.cients = response;
			});
		}
	}
]);
va.controller('rentsCtrl', ['$scope', '$http', '$location', '$routeParams',
	function($scope, $http, $location, $routeParams){
		
		$scope.getRents = function(){
			$http.get('/api/v1/rents').success(function(response){
				$scope.rents = response;
			});
		}
	}
]);
