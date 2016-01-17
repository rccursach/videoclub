va = angular.module('videoclubApp.controllers', []);

va.controller('directorsCtrl', ['$scope', '$http', '$location', '$routeParams',
	function($scope, $http, $location, $routeParams){
		alert('hola director');
	}
]);

va.controller('genresCtrl', ['$scope', '$http', '$location', '$routeParams',
	function($scope, $http, $location, $routeParams){
		alert('hola genero');
	}
]);
va.controller('moviesCtrl', ['$scope', '$http', '$location', '$routeParams',
	function($scope, $http, $location, $routeParams){
		alert('hola pelicula');
	}
]);
va.controller('clientsCtrl', ['$scope', '$http', '$location', '$routeParams',
	function($scope, $http, $location, $routeParams){
		alert('hola cliente');
	}
]);
va.controller('rentsCtrl', ['$scope', '$http', '$location', '$routeParams',
	function($scope, $http, $location, $routeParams){
		alert('hola arriendo');
	}
]);
