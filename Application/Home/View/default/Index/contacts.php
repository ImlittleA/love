<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; margin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"> 
	<link rel="stylesheet" href="css/contactform.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400italic' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
</head>
<body id="page5">
	<!--==============================header=================================-->
    <header>
    	<div class="main zerogrid">
        	<h1>
            	<a href="index.html">LauraJohn</a>
                <em>Our wedding  Page</em>
            </h1>
        </div>
        <div class="menu-row">
        	<div class="main zerogrid">
            	<div class="col-full">
                	<nav>
                        <ul class="menu">
                            <li><a href="index.html">About</a></li>
                            <li><a href="wedding.html">Wedding</a></li>
                            <li><a href="album.html">Album</a></li>
                            <li><a href="links.html">Links</a></li>
                            <li><a class="active"  href="contacts.html">contacts</a></li>
                        </ul>
                    </nav>
                </div> 
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content">
        <div class="main zerogrid">
        	<article class="col-2-3">
            	<div class="wrap-col">
                	<h2 class="indent-bot2">Contact Form</h2>
                    <div id="contact_form">
	        
			        	<!--Warning-->
						<center><?php echo $text;?></center>
						<!---->
						
						<strong>Hello !! You can send message to us.</strong>
						<form name="form1" id="ff" method="post" action="contacts.php">
							 <label>
							 Name*:
							 <input type="text" placeholder="Please enter your name" name="name" id="name" required>
							 </label>
						 
							 <label>
							 Email*:
							 <input type="email" placeholder="youremail@gmail.com" name="email" id="email" required>
							 </label>
								
							 <label>
							 Message*:
							 <textarea name="message" id="message">Please enter your message</textarea>
							 </label>
						 
							 <input class="sendButton" type="submit" name="Submit" value="Send">
							 
						</form>
					</div>
                </div>
            </article>
            <article class="col-1-3">
            	<div class="wrap-col">
                	<h2 class="indent-bot2">Contact Us</h2>
                    <div class="indent-bot" style="display: inline-block;">
                        <figure class="img-border1">
                            <iframe width="262" height="180" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                        </figure>
                        <div class="clear"></div>
                    </div>
                    <dl>
                        <dt class="p2">USA 8901 Marmora Rd, Glasgow</dt>
                        <dd><span>Telephone:</span>  +1 800 559 6580</dd>
                        <dd><span>Fax:</span>  +1 800 889 9898</dd>
                        <dd><span>Email:</span> <a href="#">mail@demolink.org</a></dd>
                    </dl>
                </div>
            </article>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main zerogrid">
            <div class="col-full"><div class="wrap-col">
            	<span class="footer-text">
                	<span>Laura &amp; John &copy; 2015</span>
                    <a rel="nofollow" class="link" target="_blank" href="http://www.zerotheme.com/">Free Html5 Templates</a> by <a rel="nofollow" class="link" target="_blank" href="http://www.templatemonster.com/">TemplateMonster</a> and <a rel="nofollow" class="link" target="_blank" href="http://www.zerotheme.com/">Zerotheme</a>
                </span>
            </div></div>
        </div>
    </footer>
</body>
</html>