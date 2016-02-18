/**
 * Created by davcharles on 18/02/2016.
 */
/**
 * Created by David on 1/30/2016.
 */

var app = angular.module('mainApp', []);



app.controller('dataCTRL', function($scope, $http) {
    /*
     i was getting some error using ang.php so i referenced the json directly.
     i can assure that the .php way will work too as i have done in index.php
     using data_source.php in ang-search-warren-reference-folder.
     feel free to delete it after you have looked around
     */
    $http.get("/AngularSearch/data2.json").then(function (response) {
        //console.log(response.data);
        $scope.myData = response.data;
        $scope.searchPoly = function(item){
            if (!$scope.polySearch ||
                (item.id.toLowerCase().indexOf($scope.polySearch.toLowerCase()) != -1) ||
                (item.label.toLowerCase().indexOf($scope.polySearch.toLowerCase()) != -1))
                return true;
            return false;
        };
    });
});