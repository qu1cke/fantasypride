<html lang="de" ng-app="registrationApp" ng-controller="MainCtrl">


<head> <!-- entfernen! -->
    <meta charset="utf-8"> <!-- entfernen! -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- entfernen! -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- entfernen! -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap --> <!-- entfernen! -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- angularjs -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body> <!-- entfernen! -->

<div class="container"> <!-- entfernen! -->

<div class="row">
	<div class="col-md-12">
		<div class="cat-blocks">
            
            
            <h1>Fantasypride 2016<br><small>3. September 2016, Phantasialand Brühl bei Köln</small></h1>
            
            <p>
		Wir bringen dich und deine Freunde für 75 Euro je Person mit dem Bus zum Fantasypride in das Phantasialand nach Brühl. Der Eintritt in den Park ist dabei natürlich inklusive! Hier könnt ihr euch für die Fahrt registrieren.</p>
		<p>
		<em>Wichtig: </em>Dies ist lediglich eine Reservierung, die Teilnahme ist erst garantiert, wenn mindestens 35 Teilnehmer dabei sind und die Reise bezahlt haben. Sollten bis zum 19. August diese Voraussetzungen nicht erfüllt sein, überweisen wir das Geld selbstverständlich zurück. Nach der Anmeldung nehmen wir schnellstmöglich Kontakt mit euch auf und klären die Zahlungsdetails.
		</p>
		<p>
		Und nun auf! Registrieren!
		</p>
            
		</div>
	</div>
</div>





		

		<!-- debug -->
		<pre ng-show="false">
			{{members}}
            {{PostDataResponse}}
		</pre>

        <div id="registrationFormContainer">

        <div class="alert {{alert.class}}" ng-show="alert.visible">
        {{alert.message}}
        </div>

		<form class="form-horizontal" ng-hide="posted" id="registrationForm" name="registrationForm">
		<fieldset>
    	<!-- Form Name -->
    	<legend>Ich bin dabei!</legend>

    	<!-- Vorname -->
    	<div class="form-group">
    	  <label class="col-md-2 control-label" for="firstName1">Vorname</label>  
    	  <div class="col-md-4">
    	  <input id="firstName1" name="firstName1" placeholder="Vorname" class="form-control input-md" required="" type="text" ng-model="members[0].firstname">
    	    
    	  </div>
    	</div>

    	<!-- Nachname -->
    	<div class="form-group">
    	  <label class="col-md-2 control-label" for="lastName1">Nachname</label>  
    	  <div class="col-md-4">
    	  <input id="lastName1" name="lastName1" placeholder="Nachname" class="form-control input-md" required="" type="text" ng-model="members[0].lastname">
    	    
    	  </div>
    	</div>

    	<!-- E-Mail -->
    	<div class="form-group">
    	  <label class="col-md-2 control-label" for="email1">E-Mail</label>  
    	  <div class="col-md-4">
    	  <input id="email1" name="email1" placeholder="E-Mail" class="form-control input-md" required="" type="email" ng-model="members[0].email">
    	  <span class="help-block">Deine E-Mail-Adresse für die Anmeldung und unsere primäre Kontaktmöglichkeit.</span>  
    	  </div>
    	</div>

    	<!-- Telefon -->
    	<div class="form-group">
    	  <label class="col-md-2 control-label" for="phone1">Handynummer</label>  
    	  <div class="col-md-4">
    	  <input id="phone1" name="phone1" placeholder="Handynummer" class="form-control input-md" required="" type="text" ng-model="members[0].phone">
    	  <span class="help-block">Deine Handynummer für den Kontakt im Park. Wirklich wichtig!</span>  
    	  </div>
    	</div>

        <!-- Ticket -->
        <div class="form-group">
          <label class="col-md-2 control-label" for="ticket">Eintrittsticket</label>  
          <div class="col-md-4">
        
            <label class="checkbox-inline" for="ticket">
            <input name="ticket" id="ticket" value="1" type="checkbox">
                Eintrittsticket dazubuchen
            </label>

          <span class="help-block">Möchtest Du zusätzlich ein Eintrittsticket buchen?</span>  
          </div>
        </div>

    	<!-- Kommentare -->
    	<div class="form-group">
    	  <label class="col-md-2 control-label" for="comment">Kommentare und Anmerkungen</label>
    	  <div class="col-md-4">                     
    	    <textarea class="form-control" id="comments" name="comment" ng-model="members[0].comment"></textarea>
    	  </div>
    	</div>

    	<hr />

    	<!-- Friends section -->
    	<div class="form-group" ng-show="members.length == 1">
    	  <label class="col-md-2 control-label" for="addFriend"></label>
    	  <div class="col-md-4">
    	    <button id="addFriend" name="" class="btn btn-default" ng-click="addNewMember()">Freund(in) hinzufügen</button>
    	  </div>
    	</div>

    	<div class="form-group" data-ng-repeat="member in members" ng-show="member.id > 1">
    	    <label for="anotherMember" class="col-xs-2 control-label">Teilnehmer(in) {{member.id}}</label>
    	    <div class="col-md-10">
    	        <div class="form-inline">
    	        	<div class="form-group">
    	        		<label for="inputFriendFirstName" class="col-md-1 control-label"></span></label>
    	                <input type="text" class="form-control col-md-2" id="inputFriendFirstName" required="" placeholder="Vorname" ng-model="member.firstname"/>
    	            </div>
    	            <div class="form-group">
    	            	<label for="inputFriendLastName" class="col-md-1 control-label"></label>
    	            	<input type="text" class="form-control col-md-2" id="inputFriendLastName" placeholder="Name" ng-model="member.lastname"/>
    	            </div>
    	            <div class="form-group">
    	                <label for="inputFriendLastName" class="col-md-1 control-label"></label>
    	                <input type="text" class="form-control col-md-2" id="inputFriendPhoneNumber" placeholder="Handynummer" ng-model="member.phone"/>
    	            </div>
                    <div class="form-group">
                        <label for="inputFriendTicket" class="col-md-1 control-label checkbox-inline"></label>
                        <input name="inputFriendTicket" id="ticket" value="1" type="checkbox" ng-model="member.ticket">
                        Ticket
                    </div>
    	            <div class ="form-group" ng-show="$last">
    	           		<label for="addMember" class="col-md-1 control-label"></label>
    	        		<button id="addMember" name="addMember" class="form-control col-md-1 btn btn-success" ng-click="addNewMember()">+</button>
    	        	</div>
    	        	<div class ="form-group" ng-show="$last">
    	            	<label for="removeMember" class="col-md-1 control-label"></label>
    	        		<button id="removeMember" name="removeMember" class="form-control col-md-1 btn btn-danger" ng-click="removeMember()">-</button>
    	        	</div>
    	        </div>
    	    </div>
    	</div>

    	<hr />
    	
       	<!-- Button -->
    	<div class="form-group">
    	  <label class="col-md-2 control-label" for="postForm">Daten absenden</label>
    	  <div class="col-md-6">
    	  	    <button id="postForm" name="postForm" class="btn btn-success" ng-click="postForm()" ng-hide="registrationForm.$invalid">Absenden</button>
    	  	    <span class ng-show="registrationForm.$invalid">Bitte fülle zunächst alle Felder aus.</span>
    	  		<span class="help-block">Nach dem Absenden der Daten werden wir uns schnellstmöglich mit dir in Verbindung setzen, um die Zahlung zu klären. Bitte habe ein wenig Geduld :)</span> 
    	  </div>

    	</div>

		</fieldset>    	
    	<!-- end form -->
    	</form>
    	</div>
</body> <!-- entfernen! -->
</div><!-- entfernen! -->

	<script type="text/javascript">
	
		var app = angular.module('registrationApp', []);

		app.controller('MainCtrl', function($scope, $http) {

		  	$scope.members = [{id: 1}];
		  	$scope.posted = false;
            $scope.alert=[];
            $scope.alert.visible = false;

		  	
            var url = "/z-script-fantasypride/fantasypride.php";

    		$scope.addNewMember = function() {
    			var newItemNo = $scope.members.length+1;
    			$scope.members.push({'id':newItemNo});
  			};
    
  			$scope.removeMember = function() {
    			var lastItem = $scope.members.length-1;
    			$scope.members.splice(lastItem);
  			};

  			$scope.postForm = function(){
  			 	 
                var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
                }
  				  
                $.each($scope.members, function(index, val) {
                     val.eventid = "FP-2017";
                     val.registered = new Date();
                });

                var data = $scope.members;

                $http.post(url, $scope.members,config)
                   .success(function (data, status, headers, config) {
                        $scope.PostDataResponse = data;
                        $scope.alert.class = "alert-success";
                        $scope.alert.message = "Vielen Dank für deine Anmeldung. Wir setzen uns schnellstmöglich mit dir in Verbindung.";
                        $scope.alert.visible = true;
                        $scope.posted = true;

                        console.log($scope);

                    })
                    .error(function (data, status, header, config) {
                        $scope.PostDataResponse = "Data: " + data +
                        "<hr />status: " + status +
                        "<hr />headers: " + header +
                        "<hr />config: " + config;
                        $scope.alert.class = "alert-danger";
                        $scope.alert.message = "Leider gab es ein Problem mit deiner Anmeldung.";
                        $scope.alert.visible = true;
                        $scope.posted = true;
                });
    		 };
  			
  		});

	</script>
	
	
    <!-- bootstrap -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

   </html>
