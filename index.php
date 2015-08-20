<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        
          <a class="navbar-brand" href="index.php">Test AngularJs</a>
        </div>
        <!--/.navbar-collapse -->
      </div>
    </nav>

   

    <div class="container" style="min-height:400px;">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12" >
          <h2>Class</h2>
          <p>
          	<div ng-app="myApp" ng-controller="customersCtrl">
                <ul>
                  <li ng-repeat="x in classes">
                    <a href="users.php?classID={{x._id}}">{{ x._id + ', ' + x.nameShort }}</a>
                  </li>
                </ul>
                
                <form name="myForm">
                    <label for="mySelect">Classes:</label>
                    
                    <select name="mySelect" id="mySelect"
                    ng-options="x.nameShort for x in classes track by x._id"
                    ng-model="classes.selectedOption" ng-init="form.type=typeOptions[0].value" ng-change="GetGrowers();">                    
                    </select>
                </form>
                <br>
                <tt>x = {{classes.selectedOption}}</tt><br/>
                </div>
                
                <script>
                var app = angular.module('myApp', []);
                app.controller('customersCtrl', function($scope, $http) {
					
                    $http.get("http://test123-plaul1.rhcloud.com/api/sa/classes")
                    .success(function(response) {$scope.classes = response;});
                });
                </script>
          </p>
        </div>
        
        
      </div>
      
        

      <hr>

      <footer>
        <p>&copy; Company 2015</p>
      </footer>
    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>