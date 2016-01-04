var app = angular.module('app', ['ngRoute']);
app.config(function($locationProvider, $routeProvider) {
	$routeProvider.when('/', {
		templateUrl: 'views/home.html',
		controller: 'homeCtrl'
	}).otherwise({ redirectTo: '/' });
});

app.controller('homeCtrl', ["$scope", function($scope){
    

    $scope.nav_profil = "Profil" /** ska länkas till profilsidan*/
   	$scope.nav_install ="Inställningar" /* ska länkas till settingssidan*/
   	$scope.nav_log = "Log Out" /* kopplas till utloggning via google auth*/
    
    $scope.user_name = {{http://localhost:8000/api/flow}} /* hämta ut den inloggade användarens namn*/
    $scope.button_name = "Rubrik" /* knappen som är aktiv som rubrik*/
    $scope.button_bread ="Brödtext" /* innehåll till aktiv knapp*/
    $scope.flow_active = "FLÖDE - 1 2 eller 3" /* använd http://localhost:8000/api/flow för att streama öppet flöde */
   	

    
    $scope.title = "Test"

    
    
}]);