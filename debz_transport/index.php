<!doctype html>
<html lang= "en" dir="ltr">
	<head>
		<meta name="viewport" content="width=device-width"/>
		<meta charset= "UTF-8"/>
		<title>Nerds in America</title>
		<meta name= "description" content= "This page is the home page for my website about me and my friends - the nerds - in America."/>
		<meta name ="coypright" content = "coypright Alexandra Hall 2018"/>
		<meta http-equiv="X-UA-Compatible" content="IE-Edge, chrome-1"/>
        <link rel="stylesheet" type= "text/css" href="css/default.css"/>
		<link href="https://fonts.googleapis.com/css?family=Poppins|Raleway|Titillium+Web" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
        
<!--        <script src="back_to_top.js"></script>-->
        <script src="scroll.js"></script>
        
	</head>
	
	<body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
		<button class ="noprint" onclick="topFunction()" id="myBtn" title="Go to top">&#8679;</button>

        <header class= "noprint">
            <div class="hero-image">
                <div class="hero-text">
                <h1 style="font-size:50px">Nerds in America</h1>
                <p>My friends and I in America</p>
                </div>
            </div>
        </header>

        <div id= "navbar" class="navbar">
            <ul class="noprint"> <!-- NOte that 'a href' below is a page link and closes with a '</a>'. 'li' is a line element so this makes an unordered list of links which are then styles in css.styles-->
                <li><a href= "index.php">Home</a></li>
                <li><a href= "about.php">About</a></li>
                <li><a href= "gallery.php">Gallery</a></li>
            </ul>
            
        </div>
        
        <div id="container">
			<article>
                
				<div class="printonly">
                    <h1 style="font-size:50px">Debz Transport</h1>
                    <p style="font-size:20px">A Wellington-based company</p>
                </div>
                
				<h1>Welcome to Nerds in America</h1>
				<p>Welcome to my website about my 2017 trip to America. I went with a group of year 12s, year 13s, and two year 11s. The group contained those who just really wanted to got to America and shop, the total nerds there to see the inside of a etchnology comapany(all these people wanted was a book shop).The trip was a long harrowing flight with students being fed the best aeroplane "food". My friend Zoe and her amazing, kind, and super modest friend Alexandra agreed to share <a href= "images/bed_zoe.jpg">sleeping quarters</a> to allow their travelling roommate Caitlin her own bed (age before beauty).Please enjoy the other pages including a page containing diary extracts and a gallery of images taken on the trip. </p>
                
                <img src="images/under_the_flag.jpg" width="500px" title ="Do you smell the freedom?" alt="A group of girls standing underneath the American Flag"/>
                
			</article>
			<aside class="noprint" class="contact">
				<h1>Contact us</h1>
		
                <form method="post" action="contact.php">
                    <p>
<!--                        <label for="name">Name</label> Not needed due to placeholders-->
                        <input type="text" id="name" name="name" placeholder="Name" />
                    </p>
                    <p>
<!--                        <label for="email">Email</label> Not needed due to placeholders-->
                        <input type="text" id="email" name="email" placeholder="Email" />
                    </p>
                    <p>
<!--                        <label for="message">Message</label> Not needed due to placeholders-->
                        <textarea id="message" name="message" rows="6" cols="40" placeholder="Message"></textarea>
                    </p>
                    <p>
                        <button type="submit" name="send">Send message</button>
                    </p>
                </form>
                <?php
                    // Test if the form has been submitted
                    if(isset($_POST['send'])) {
                        // Prepare the email
                        $to = 'alexandrahall.student@wegc.school.nz';
                        $subject = 'Message sent from website';
                        $message = $_POST['message'];
                        // Send it
                        $sent = mail($to, $subject, $message);
                        if($sent) {
                            echo 'Your message has been sent';
                        } else {
                            echo 'Sorry, your message could not send.';
                        }
                    }
                ?>
			</aside>
			
			<footer class= "noprint">
               <p id="date">&nbsp &nbsp &copy; Alexandra Hall 2018 <?php echo date('D-d-M-Y'); ?> <?php date_default_timezone_set("Pacific/Auckland");
				?></p>

				<p>All images and information (unless stated otherwise) on this page is owned by Alexandra Hall. Permission to use these photos on my website has been granted by the parties involved/pictured.</p>
                <br>
                <div class="like"> 
                    <div class="fb-like" data-href="http://www.wegcstudents.com/y132018/nia/index.php" data-width="100" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                
                </div>
                
			</footer>
		</div>
	</body>
	
</html>