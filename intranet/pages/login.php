

<?php include_once 'helpers.php'?>

<!DOCTYPE html>
<html>
    <head>
    	<title>login</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    
    <body>
    
    	<div class="w3-display-container" style="height:100vh;" >
    	
    		<div class="w3-card-4 w3-display-middle">
    			<div class="w3-container w3-light-gray">
    				<h2>Hospital Login</h2>
    			</div>
    			
    			<br> <!--  for space -->
    			
        	   <div class="w3-container">
            	    <label>Username</label>
            		<input id="username" class="w3-input w3-border" type="text">
            		
            		<br> <!-- for space -->
            		
            		<label>Password</label>
            		<input id="password" class="w3-input w3-border" type="text">
            		
            		<br> <!--  for space -->
            		
	                <button id="submit" class="w3-btn w3-block w3-light-gray" value="login">login</button>
            		
        	   </div>
					<br> <!--  for space -->
    		</div>
    	</div>	
    </body>
    
    <script type="text/javascript">

	$(document).ready(function(){

		$("#submit").click(function(){

			$.post( <?php /* url needs to go here*/; ?>,
				{
					username: $("#username").val(),
					password: $("#password").val(),
					method: "login"
				},
				function(data, status){ // callback function
					if(status == "success"){
					
					}else{
						alert("Username or Password inccorect");
					}
				}
			);
		});
		
	});

    </script>
</html>
