'use strict';

var videoclubApp = angular.module('videoclubApp',[
		'ngRoute',
		'ngResource',
		'videoclubApp.controllers',
		//'videoclubApp.services',
		'ui.bootstrap'
	]);

videoclubApp.config(['$routeProvider', '$locationProvider',
	function($routeProvider, $locationProvider){
		$routeProvider.
		//directors
		when('/directors', {
			templateUrl : 'partials/directors/index',
			controller : 'directorsCtrl'
		}).
		when('/directors/new', {
			templateUrl : 'partials/directors/new',
			controller : 'directorsCtrl'
		}).
		when('/directors/:director_id', {
			templateUrl : 'partials/directors/edit',
			controller : 'directorsCtrl'
		}).
		when('/genres', {
			templateUrl : 'partials/genres/index',
			controller : 'genresCtrl'
		}).
		when('/genres/new', {
			templateUrl : 'partials/genres/new',
			controller : 'genresCtrl'
		}).
		when('/genres/:genre_id', {
			templateUrl : 'partials/genres/edit',
			controller : 'genresCtrl'
		}).
		when('/clients', {
			templateUrl : 'partials/clients/index',
			controller : 'clientsCtrl'
		}).
		when('/clients/new', {
			templateUrl : 'partials/clients/new',
			controller : 'clientsCtrl'
		}).
		when('/clients/:client_id', {
			templateUrl : 'partials/clients/edit',
			controller : 'clientsCtrl'
		}).
		when('/movies', {
			templateUrl : 'partials/movies/index',
			controller : 'moviesCtrl'
		}).
		when('/movies/new', {
			templateUrl : 'partials/movies/new',
			controller : 'moviesCtrl'
		}).
		when('/movies/:movie_id', {
			templateUrl : 'partials/movies/edit',
			controller : 'moviesCtrl'
		}).
		when('/rents', {
			templateUrl : 'partials/rents/index',
			controller : 'rentsCtrl'
		}).
		when('/rents/new', {
			templateUrl : 'partials/rents/new',
			controller : 'rentsCtrl'
		}).
		when('/rents/:rent_id', {
			templateUrl : 'partials/rents/edit',
			controller : 'rentsCtrl'
		}).
		otherwise({
			redirectTo : '/'
		});
		$locationProvider.html5Mode(true);
	}
]);

 videoclubApp.run(['$route', function($route)  {                                           
   $route.reload();                                                            
}]);