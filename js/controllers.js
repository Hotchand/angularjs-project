'use strict';

/* Controllers */

var phonecatControllers = angular.module('phonecatControllers', []);

phonecatControllers.controller('ClassListCtrl', ['$scope', '$http',
  function($scope, $http) {
    $http.get('http://test123-plaul1.rhcloud.com/api/sa/classes').success(function(data) {
      $scope.classes = data;
    });
  }]);
  
phonecatControllers.controller('PhoneListCtrl', ['$scope', '$routeParams', '$http',
  function($scope, $routeParams, $http) {
    $http.get('http://test123-plaul1.rhcloud.com/api/sa/pointsForAllStudents/'+ $routeParams.ClassID).success(function(data) {
      $scope.users = data;
    });
  }]);

phonecatControllers.controller('PhoneDetailCtrl', ['$scope', '$routeParams', '$http',
  function($scope, $routeParams, $http) {
    $http.get('http://test123-plaul1.rhcloud.com/api/sa/studentStudypoint/' + $routeParams.ClassID + '/' + $routeParams.StudentID).success(function(data) {
      $scope.user_data = data;
    });
  }]);
