// Declare app modulo donde se indican los filtros y servicios.
//El nombre del modulo debe ser igual al que se declaro en el html 'myApp'
var app = angular.module('myApp', ['myApp.services']);
//Crear un controllador en el modulo
//Llamamos el nombre myController con el nombre del html

app.controller('myController', ['$scope', 'PhpService',
    function ($scope, PhpService) {
       $scope.lista={};
        $scope.usuario = {};
        $scope.enviar = function () {
            alert($scope.usuario.nombre);
             var s="'null','"+$scope.usuario.nombre+"','En diseño'";
            var enviar = {};
            enviar = $.param({/*"enviado": JSON.stringify($scope.usuario)
            ,"opcion":JSON.stringify($scope.accion),*/Op:'insertar',tabla:'encuesta',values:s}); //convertimos a url string todos los parametros para enviarlos como tipo 'form' 
            PhpService.enviar(enviar);
        };
        $scope.cargar= function(){
            PhpService.obtener().$promise.then(function($salidaJSON){
               $scope.lista= $salidaJSON.respuesta;
               alert($salidaJSON.respuesta);
            });
        };
    }]);