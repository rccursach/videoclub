va = angular.module('videoclubApp.controllers', []);

va.controller('directorsCtrl', ['$scope', '$http', '$location', '$routeParams',
	function($scope, $http, $location, $routeParams){
		
		$scope.getDirectors = function(){
			$http.get('/api/v1/directors').success(function(response){
				$scope.directors = response;
			});
		}
	}
]);

va.controller('genresCtrl', ['$scope', '$http', '$location', '$routeParams', '$resource',
	function($scope, $http, $location, $routeParams, $resource){
		
		$scope.getGenres = function(){
			$http.get('/api/v1/genres').success(function(response){
				$scope.genres = response;
			});
		};

		$scope.genreSave = function() {
			console.log($scope.genre);
			$http.post('/api/v1/genres', $scope.genre).
			then(
				function successCallback(response){
					alert(response.message);
				},
				function errorCallback(response){
					alert(response.message);
				});
		};
	}
]);
va.controller('moviesCtrl', ['$scope', '$http', '$location', '$routeParams',
	function($scope, $http, $location, $routeParams){

		$scope.getMovies = function(){
			$http.get('/api/v1/movies').success(function(response){
				$scope.movies = response;
			});
		}
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
