<!doctype html>
<html lang= "en" dir="ltr">
	<head>
		<meta name="viewport" content="width=device-width"/>
		<meta charset= "UTF-8"/>
		<title>Nerds in America</title>
		<meta name= "description" content= "This page is the gallery page for Nerds in America."/>
		<meta name ="coypright" content = "coypright Alexandra Hall 2018"/>
		<meta http-equiv="X-UA-Compatible" content="IE-Edge, chrome-1"/>
        <link rel="stylesheet" type= "text/css" href="css/default.css"/>
		<link href="https://fonts.googleapis.com/css?family=Poppins|Raleway|Titillium+Web" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
        
        <script src="scroll.js"></script>
	</head>
    
    <body>
        <button class ="noprint" onclick="topFunction()" id="myBtn" title="Go to top">&#8679;</button>
        <header>
            <div class="hero-image">
                <div class="hero-text">
                <h1 style="font-size:50px">Nerds in America</h1>
                <p>My friends and I in America</p>
                </div>
            </div>
        </header>
        
        <div id="navbar">
            <ul class="noprint"> <!-- NOte that 'a href' below is a page link and closes with a '</a>'. 'li' is a line element so this makes an unordered list of links which are then styles in css.styles-->
                <li><a href= "index.php">Home</a></li>
                <li><a href= "about.php">About</a></li>
                <li><a href= "gallery.php">Gallery</a></li>
            </ul>
            
        </div>
        
        <div id = "container" class = "full">
            <article>
                
                <h1>Gallery</h1>
    
                <?php
                        /* simple read a directory and display each file as an image */

                        /*assign the variable $dir_name to the folder name you have your images in */
                        $dir_name = "images/gallery";
                        $dir_basic ="images";
                        $dir_thumbs ="gallery_thumbs";

                        /*set up a variable to count the images */
                        $inum = 0;

                        /*open up the directories*/
                        $directory = @opendir($dir_name);
                        if (!$directory) {
                        //There was no result
                            echo "There is a problem with the website. ";
                            die ("I suggest you try later.");
                            }

                        while ($file=@readdir($directory)){
                            //remove various unwanted directory entries such as . and .. Other can be added including Thumbs.db
                            if ($file == '.' || $file == '..' || $file== 'Thumbs.db') {
                                continue;
                                }//skip current iteration of loop from here	*/				

                            //name the images
                            $name = str_replace('_', ' ', $file);
                            $name = ucwords($name);
                            $name = preg_replace('/\\.[^.\\s]{3,4}$/', '', $name);
                            $name = preg_replace('/[0-9]+/', null, $name);

                            
                            echo'<div class="notcontainer">';
                            
                            echo'<a href="'.$dir_name.'/'.$file.'" target="_blank"><img src="'.$dir_basic.'/'.$dir_thumbs . '/thumb_' . $file.' " alt = "'.$name.'"></a>
                            <div class = "middle">
                            <div class="text">'. $name.'</div>
                            </div>
                            </div>';
                        }
                    ?>
            </article>
            
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
