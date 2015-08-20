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
      
      
        <div class="row" style="clear:both;">
            <div class="col-md-12">
                <div ng-app="myApp1" ng-controller="PeopleCtrl">
                	
                    <p>&nbsp;<br><br></p> 
                    <div class="col-md-6" style="margin:20px; border:3px #999 solid !important; line-height:20px;" >                    	
                          <div class="h3"><b>Class ID</b>: {{users._id}}</div>
                          <div class="h3"><b>Class</b>: {{users.nameShort}}</div>
                          <div class="h3"><b>Description</b>: {{users.description}}</div>
                          <div class="h3"><b>Max Points For Semester</b>:  {{users.maxPointForSemester}}</div>
                          <div class="h3"><b>Required Points</b>: {{users.requiredPoints}}</div>                          
                    </div>                  
                    <table class="table table-hover">
                            <thead>
                                <tr>
                                  <th>#</th>
                                  <th>User-Id</th>
                                  <th>Name</th>
                                  <th>Points</th>
                                </tr>
                            </thead>                             
                            <tr ng-repeat="user1 in users.Students">
                              <th scope="row">{{user1.id}}</th>
                              <td><a href="user.php?usr={{users._id}}/{{user1.id}}">{{user1.user}}</a></td>
                              <td>{{user1.name}}</td>
                              <td>{{user1.points}}</td>
                            </tr>       
                        </table>   
                    
                </div>
                <?php 
				    $classID='';
					if(isset($_REQUEST['classID']) and !empty(trim($_REQUEST['classID']))){
						$classID = $_REQUEST['classID'];
					}else{ $classID = 'Semester3-xx123'; }
				?>
                <script>
				var app = angular.module('myApp1', []);
				app.controller('PeopleCtrl', function($scope, $http) {
					$http.get("http://test123-plaul1.rhcloud.com/api/sa/pointsForAllStudents/<?php echo $classID; ?>")
					.success(function (response) {$scope.users = response;});
				});
				</script>
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