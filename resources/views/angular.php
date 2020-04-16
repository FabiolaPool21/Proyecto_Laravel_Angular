<!DOCTYPE html>
<html>
<head>
	<title>Angular en Laravel</title>
</head>
<body>

<div ng-app="myApp" ng-controller="TareasController">
	<input type="text" name="uno" ng-model="nombre">
	<button type="button" ng-click="save()">Enviar</button>
</div>


<script src="angular16/angular.min.js"></script>
<script src="js/angular.js"></script>

</body>
</html>