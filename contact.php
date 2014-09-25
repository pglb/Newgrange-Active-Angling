<!DOCTYPE html>
<html lang="en">
   <head>
   	<meta charset="utf-8">
   	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<title>Newgrange Active Angling</title>
   	<!-- Bootstrap -->
   	<link href="css/bootstrap.min.css" rel="stylesheet">
   	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   	<!--[if lt IE 9]>
   		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   	<![endif]-->
   </head>
   <body>
		<!--NAVBAR-->
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">   	
			<div class="container">    		
				<div class="navbar-header">    			
					<a href="" class="navbar-brand">Newgrange Active Angling</a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>  
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span>      
					</button>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.html">Home</a></li>
						<li><a href="angling.html">Angling</a></li>
						<li><a href="juniors.html">Juniors</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
		 	<!--PHP-->		        
	        <?php
	        	//Form Input Variables
	        	$name = $_POST['name'];
	        	$phone = $_POST['phone'];
	        	$email = $_POST['email'];
	        	$comment = $_POST['comment'];

	        	//Email Setup
	        	$to = 'paul.burns@hotmail.com';
	        	$subject = 'Newgrange Active Angling Website - Message/Query';
	        	$message= "Name: $name\n" .
	        			  "Message: $comment\n" .
	        			  "Phone: $phone";			            	
	        	mail($to, $subject, $message, 'From: '. $email);	   

	        ?>
		    <!--End of PHP-->
		    <br />
	    	<h5 class="text-center">Thanks for submitting the form. I will respond to your query shortly. </h5>
			<h5 class="text-center">Brendan.</h5>
			<br />
			<p class="text-center">
				<a href="https://www.facebook.com/NewgrangeActiveAngling"><img src="images/icons/facebook.gif" alt="Facebook Icon" height="20px" width="20px"></a>
				<a href="https://twitter.com"><img src="images/icons/twitter.png" alt="Twitter Icon" height="20px" width="20px"></a>
			</p>
		</div>

		

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
