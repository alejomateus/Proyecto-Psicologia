var app = angular.module('angularPostPHP', []);
 
app.controller('loginCtrl', function ($scope) {
 
    $scope.login = function () {
 $http({
  method: 'POST',
  url: 'myajax.php',
  data:{Op:'insertar',tabla:'encuesta',values:$scope.email}
}).then(function (response) {
            alert("11"+response.respuesta+"||"+$scope.email);
  }, function errorCallback(response) {
  alert("Errores");
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  });
    }
});
