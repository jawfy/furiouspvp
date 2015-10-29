<!DOCTYPE html>

<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'example@domain.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>JACK EARSMAN // BLOG</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,800,700italic,700,600italic,600,400italic,300italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
		body, .jumbo1, .jumbotron {
			background-color: #ededed;
			}
			
		html {
			overflow: auto;
		}
		body {
			position: absolute;
			top: 20px;
			left: 20px;
			bottom: 20px;
			right: 20px;
			padding: 30px; 
			overflow-y: scroll;
			overflow-x: hidden;
		}
		
		/* Let's get this party started */
		::-webkit-scrollbar {
			width: 3px;
		}
		 
		/* Track */
		::-webkit-scrollbar-track {
			-webkit-box-shadow: inset 0 0 2px rgba(0,0,0,0.3); 
			-webkit-border-radius: 5px;
			border-radius: 110px;
		}
		 
		/* Handle */
		::-webkit-scrollbar-thumb {
			-webkit-border-radius: 5px;
			border-radius: 1px;
			background: #000; 
			-webkit-box-shadow: inset 0 0 120px #000000; 
		}
		::-webkit-scrollbar-thumb:window-inactive {
			background: #000; 
		}
		
		nav {
			display: block;
		}
		
    </style>
    
  </head>
  <body>
   
    <div class="jumbotron">
    
    <div class="container">
      <div class="row jumbo1">
        <div class="col-lg-4">
          <img class="img-circle" src="https://scontent.fman1-1.fna.fbcdn.net/hphotos-xaf1/t31.0-8/q84/p960x960/10926773_849498835071608_6082793424806286538_o.jpg" alt="Generic placeholder image" style="position: static;" width="140" height="140">
        </div><!-- /.col-lg-4 -->
      </div>
    <div class="container">
        <div class="col-lg-12">
            <h1 style="text-align: center;">JACK EARSMAN</h1>
            
            <hr style="border-color: #eee; width: 500px;">
                </div>
            </div>
            
            <hr>
            
            <div class="container blog">
            	<div class="col-lg-12">
                	<h3 style="font-family: 'Open Sans', sans-serif;">Requests Now Open!</h3>
                    <h4>I have officaly opend to request, you can now request for a website/design to be created/developed for your liking. I will provide the order link in the next coming hours!</h4>
                    <br>
                    <span class="glyphicon glyphicon-user" aria-hidden="true"><a> JackEarsman</a> 29/9/15</span> <span class="glyphicon glyphicon-heart" aria-hidden="true" style="float:right;"></span>
                </div>
            </div>
            
            <div class="container blog">
            	<div class="col-lg-12">
                	<h3 style="font-family: 'Open Sans', sans-serif;">Updates Incoming...</h3>
                    <h4>The long awaited website update is now here! I have decied to change it from a onepage to a blog, this is so I can interact with you and stay active speaking my words and showing my work!</h4>
                    <br>
                    <span class="glyphicon glyphicon-user" aria-hidden="true"><a> JackEarsman</a> 29/9/15</span> <span class="glyphicon glyphicon-heart" aria-hidden="true" style="float:right;"></span>
                </div>
            </div>
            
            <div class="container blog">
            	<div class="col-lg-12">
                	<h3 style="font-family: 'Open Sans', sans-serif;">CSS Scroll Bar!</h3>
                    <h4>Well, if you've noticed but there's a custom css scroll bar. I will let you in on a little secret which will be coming soon! Soon I will be announcing the release of my Tutorials page! I am still currently developing it but it will have tips and tricks to make your code better! Now you may be asking yourself what has this gotta do with the custom scroll bar, well... I will not only have tips and tricks but there will also be source code links and others types of files relating to the tutorial.</h4>
                    <br>
                    <span class="glyphicon glyphicon-user" aria-hidden="true"><a> JackEarsman</a> 29/9/15</span> <span class="glyphicon glyphicon-heart" aria-hidden="true" style="float:right;"></span>
                </div>
            </div>
                        
            <div class="container blog">
            	<div class="col-lg-12">
                	<h3 style="font-family: 'Open Sans', sans-serif;">Simple Code?</h3>
                    <h4>Now if you're like me and love a clean designed website, then I have a few tips. I love using a source called "bootstrap" it great! Compiles a whole bunch of css and javascrip all ready for you to use and speed up your workflow. I would recommend bootstrap for developers young or starting off as I helps get a grasp of web design.</h4>
                    <br>
                    <span class="glyphicon glyphicon-user" aria-hidden="true"><a> JackEarsman</a> 29/9/15</span> <span class="glyphicon glyphicon-heart" aria-hidden="true" style="float:right;"></span>
                </div>
            </div>
            
            <div class="container blog">
            	<div class="col-lg-12">
                	<h3 style="font-family: 'Open Sans', sans-serif;">Animations!!!</h3>
                    <h4>If you have been around for a while then you will of heard of Animate.css, it takes the tedious process of keyframing out of the picture for developers and makes it a fun and short process.</h4>
                    <br>
                    <span class="glyphicon glyphicon-user" aria-hidden="true"><a> JackEarsman</a> 29/9/15</span> <span class="glyphicon glyphicon-heart" aria-hidden="true" style="float:right;"></span>
                </div>
            </div>
            
                        <div class="container blog">
            	<div class="col-lg-12">
                	<h3 style="font-family: 'Open Sans', sans-serif;">Redesign?</h3>
                    <h4>I've been thinking over the last couple days that I should really work harder to re-create my website. I have a few ideas from surfing other websites and from other designs. Shall I give it a go?</h4>
                    <br>
                    <span class="glyphicon glyphicon-user" aria-hidden="true"><a> JackEarsman</a> 28/9/15</span> <span class="glyphicon glyphicon-heart" aria-hidden="true" style="float:right;"></span>
                </div>
            </div>
            
            <div class="container blog">
            	<div class="col-lg-12">
                	<h3 style="font-family: 'Open Sans', sans-serif;">YouTube Startup!</h3>
                    <h4>So, I'm getting kinda board just sitting around coding when I need to and have no one to speak to and no music, so I'm thinking on starting up a youtube channel such as timelapses, tutorials and much more.</h4>
                    <br>
                    <span class="glyphicon glyphicon-user" aria-hidden="true"><a> JackEarsman</a> 28/9/15</span> <span class="glyphicon glyphicon-heart" aria-hidden="true" style="float:right;"></span>
                </div>
            </div>
            
            <div class="container blog" style="margin-bottom: -10px;">
            	<div class="col-lg-12">
                	<h3 style="font-family: 'Open Sans', sans-serif;">Twitter Now Avalible!</h3>
                    <h4>Finally, I have had the spare time to create a twitter you can visit my twitter here @ https://twitter.com/jackearsmanblog</h4>
                    <br>
                    <span class="glyphicon glyphicon-user" aria-hidden="true"><a> JackEarsman</a> 28/9/15 </span> <span class="glyphicon glyphicon-file" aria-hidden="true" style="float:left;"> http://twitter.com/jackearsmanblog<a style="color:white;">s</a></span> <span class="glyphicon glyphicon-heart" aria-hidden="true" style="float:right;"></span>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="container blog">
    	  	<div class="container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<h1 class="page-header text-center">Contact Form Example</h1>
				<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
			</div>
		</div>
	</div>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </div>
    
    <hr style="border-color: #D3D3D3; width:1150px;">
    
    <div class="container">
    	<footer>
        	<h4>This was developed by Jack Earsman.</h4>
        </footer>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>