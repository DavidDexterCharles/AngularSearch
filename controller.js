/**
 * Created by David on 1/30/2016.
 */

var app = angular.module('mainApp', []);



app.controller('dataCTRL', function($scope, $http) {
    $http.get("http://localhost/AngularSearch/ang.php").then(function (response) {
        $scope.myData = response.data;
    });
});