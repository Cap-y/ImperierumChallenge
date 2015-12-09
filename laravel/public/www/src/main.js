var app = angular.module('app', ['ngRoute']);
app.config(function($locationProvider, $routeProvider) {
	$routeProvider.when('/', {
		templateUrl: 'www/views/home.html',
		controller: 'homeCtrl'
	}).otherwise({ redirectTo: '/' });
});

app.controller('homeCtrl', ["$scope", function($scope){
    
    
    $scope.title = "Din title"
    
    
}]);