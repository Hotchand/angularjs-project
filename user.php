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
    <script> function toggler(divId) {
		$("#" + divId).toggle();
	} 
	</script>
    <style>
	.top5 { margin-top:5px; }
	.top7 { margin-top:7px; }
	.top10 { margin-top:10px; }
	.top15 { margin-top:15px; }
	.top17 { margin-top:17px; }
	.top30 { margin-top:30px; }
	.space5 { margin-left:5px; }
	.space7 { margin-left:7px; }
	.space10 { margin-left:10px; }
	.space15 { margin-left:15px; }
	.space17 { margin-left:17px; }
	.space30 { margin-left:30px; }
	</style>
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
                <div ng-app="myApp2" ng-controller="UserCtrl">
                	
                    <p>&nbsp;<br><br><br></p>  
                    <h2 class="page-header">{{user_data.user}}, {{user_data.name}}</h2>
                    <div class="lead">Max Points: {{user_data.maxPointForSemester}}</div>  
                    <div class="lead">Required Points: {{user_data.requiredPoints}}</div>
                    
                    <div class="col-md-1 space5 top5" ng-repeat="periodz in user_data.periods" ng-init="parent=$parent">                    	                  	
                    	<span><button type="button" class="btn btn-default" ng-click="$parent.selected = $index;reach(111);">{{periodz.periodName}}</button></span>                        
                    </div>  
                    <p>
                    <div class="col-md-11 top5" ng-repeat="periodz1 in user_data.periods">                    	
                    	<div id="1{{$index}}" ng-show="$parent.selected == $index">
                        	<h3 class="h3">{{periodz1.periodName}}, {{periodz1.periodDescription}}</h3> 
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                          <th>Task</th>
                                          <th>Score</th>
                                          <th>Max</th>
                                        </tr>
                                    </thead>                             
                                    <tr ng-repeat="task in periodz1.tasks">                              
                                      <td>{{task.name}}</td>
                                      <td>{{task.score}}</td>
                                      <td>{{task.maxScore}}</td>
                                    </tr>       
                                </table>
                        </div>                        
                    </div> 
                    </p>            
                  		
                <?php 
				    $usr='';
					if(isset($_REQUEST['usr']) and !empty(trim($_REQUEST['usr']))){
						$usr = $_REQUEST['usr'];
					}else{ $usr = 'XXX-l15dat3q14f/2'; }
				?>    
                </div>
                <script>
				var app = angular.module('myApp2', []);
				app.controller('UserCtrl', function($scope, $http) {
					$scope.global = {};						
					$http.get("http://test123-plaul1.rhcloud.com/api/sa/studentStudypoint/<?php echo $usr; ?>")
					.success(function (response) {$scope.user_data = response;});
				});
				</script>
            </div>
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