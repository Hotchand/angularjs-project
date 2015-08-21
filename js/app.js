'use strict';

/* App Module */

var phonecatApp = angular.module('phonecatApp', [
  'ngRoute',
  'phonecatControllers'
]);

phonecatApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
	 when('/classes', {
        templateUrl: 'classes.html',
        controller: 'ClassListCtrl'
      }).	
      when('/classes/users/:ClassID', {
        templateUrl: 'users.html',
        controller: 'PhoneListCtrl'
      }).
      when('/classes/user/:ClassID/:StudentID', {
        templateUrl: 'user_details.html',
        controller: 'PhoneDetailCtrl'
      }).
      otherwise({        
		 redirectTo: '/classes'
      });
  }]);
