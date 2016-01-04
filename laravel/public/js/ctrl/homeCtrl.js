app.controller('homeCtrl', function($scope, $http) {
  $http.get("http://localhost:8000/api/flow")
  .then(function (response) {$scope.flows = response.data.flow;});
  $http.get("http://localhost:8000/api/users/1")
  .then(function (response) {$scope.user = response.data.user;});
	console.log(app);

	$scope.nav_profil = "Profil" /*ska länkas till profilsidan*/
   	$scope.nav_install ="Inställningar"  /*ska länkas till settingssidan*/
   	$scope.nav_log = "Log Out" /*kopplas till utloggning via google auth*/
    

    $scope.button_name = "Poäng" /*knappen som är aktiv som rubrik*/
    $scope.button_bread ="Brödtext"  /*innehåll till aktiv knapp*/
    $scope.flow_active = "FLÖDE - 1 2 eller 3" /* använd http://localhost:8000/api/flow för att streama öppet flöde */

});