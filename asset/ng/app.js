var pathArray = window.location.pathname.split( '/' );
//get category
var category = pathArray[3];
var categoryApp = angular.module("categoryApp",['ui.bootstrap']);


//country controller for country view and country php controller
    categoryApp.controller('categoryListController', function ($scope, $http, $timeout){
        $(".loader").show();
        $http.get(baseurl+'category/getCategoryList/'+category).success(function(data, status){
            $scope.list = data;
            $scope.currentPage = 1; //current page
            $scope.entryLimit = 10; //max no of items to display in a page
            $scope.filteredItems = $scope.list.length; //Initially for no filter
            $scope.totalItems = $scope.list.length;
            $(".loader").hide();
        });




        $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
        };
        $scope.filter = function() {
        $timeout(function() {
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
        };
        $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
        };
    });



    categoryApp.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    };
});

