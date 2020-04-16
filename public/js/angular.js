var app = angular.module('myApp',[]);//Buscar aplicacion
app.controller('TareasController', function($scope, $http){
	$scope.save=function(){
		console.log($scope.nombre);
		$http({
			url:"http://127.0.0.1:8000/api/nuevo",
			method:"POST",
			data:{
				"nombre" : $scope.nombre
			}
		}).then(function(response){
			alert('registrado exitosamente');

		}, function(response){
			alert('no se registro');
		});

}
});