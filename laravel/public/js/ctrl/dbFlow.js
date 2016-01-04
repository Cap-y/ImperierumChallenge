app.flow("db", function($http){

	return{
		getItems: function(){
			return $http.get("http://localhost:8000/api/flow");
		}
	}

});