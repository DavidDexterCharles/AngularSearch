<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ang-search</title>
	
	<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-rc.2/angular.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.18/angular-ui-router.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
	<script>
		angular
			.module('app',[
				"ui.router"
				]).
				config(['$urlRouterProvider', '$stateProvider',function($urlRouterProvider,$stateProvider){
					$urlRouterProvider.otherwise('/');
					$stateProvider.state('home',{
						url: '/',
						templateUrl:'templates/home.html',
						controller: ['$scope','cubes',function($scope,cubes){
							$scope.title = 'Home';
							$scope.items = ['item a', 'item b'];
							$scope.cubes=cubes;
						}],resolve: {
							cubes: ['$http',function($http){
								return $http.get('/ang-search/data_source.php').then(function(response){
									return response.data;
								});
							}]
						} 
					}).state('about',{
						url: '/about',
						templateUrl: 'templates/about.html'
					})
				}])
	</script>

</head>
<body>
	<div class="container" ng-app='app'>
		<header ng-include="'templates/nav.html'"></header>
		<div ui-view></div>
		<footer ng-include="'templates/footer.html'"></footer>
	</div>
	
</body>


</html>