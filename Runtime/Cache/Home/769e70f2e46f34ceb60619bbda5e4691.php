<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/love/Application/Home/Static/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/love/Application/Home/Static/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/love/Application/Home/Static/css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="/love/Application/Home/Static/css/responsive.css" type="text/css" media="all"> 
	<link rel="stylesheet" href="/love/Application/Home/Static/css/responsiveslides.css" /> 
    <link href='/love/Application/Home/Static/css/400italic.css' rel='stylesheet' type='text/css'>  
    <link href='/love/Application/Home/Static/css/Sans.css' rel='stylesheet' type='text/css'>
    <link href='/love/Application/Home/Static/css/Sans700.css' rel='stylesheet' type='text/css'>
    <script src="/love/Application/Home/Static/js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="/love/Application/Home/Static/js/tms-0.3.js" type="text/javascript"></script>
    <script src="/love/Application/Home/Static/js/tms_presets.js" type="text/javascript"></script>
    <script src="/love/Application/Home/Static/js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script type="text/javascript" src="/love/Application/Home/Static/js/css3-mediaqueries.js"></script>
	<script src="/love/Application/Home/Static/js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 984,
			namespace: "centered-btns"
		  });
		});
	</script>
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="/love/Application/Home/Static/js/html5.js"></script>
	<![endif]-->
</head>
<body id="page1">
	<!--==============================header=================================-->
    <header>
    	<div class="main zerogrid">
        	<h1>
            	<a href="index.html">LauraJohn</a>
                <em>Our wedding  Page</em>
                <embed src="http://www.c.com/love/Uploads/music/love.mp3" width="0" height="0" hidden="true" autostart="true" loop="flase"></embed>
            </h1>
        </div>
        <div class="menu-row">
        	<div class="main zerogrid">
            	<div class="col-full">
                	<nav>
                        <ul class="menu">
                            <li><a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'] ?>">首页</a></li>
                            <?php if(is_array($title)): $k = 0; $__LIST__ = $title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ao): $mod = ($k % 2 );++$k;?><li><a href="<?php echo ($ao["url"]); ?>"><?php echo ($ao["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="main zerogrid">
        	<div class="slider-wrapper">
                <div class="rslides_container">
					<ul class="rslides" id="slider">
                        <?php if(is_array($pics)): $i = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ao): $mod = ($i % 2 );++$i;?><li><img src="<?php echo ($ao["picpath"]); ?>" alt="<?php echo ($ao["title"]); ?>" /></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content">
        <div class="main zerogrid">
            <article class="col-1-3">
                <?php if(is_array($title)): $k = 0; $__LIST__ = $title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ao): $mod = ($k % 2 );++$k;?><div class="wrap-col indent-right">
                        <h3><?php echo ($ao["title"]); ?></h3>
                        <!-- <p>Laura &amp; John is one of <a class="link" target="_blank" href="#">free website tem plates</a> created by TemplateMonster.com team. This website template is optimized for 1280X1024 screen resolution.</p> -->
                        <ul class="list-1 p2">
                            <li><a href="#">Duis aute irure dolor in reprehenderit</a></li>
                            <li><a href="#">Voluptate velit esse cillum dolore</a></li>
                            <li><a href="#">Cusamus et iusto odio dignissimos</a></li>
                            <li><a href="#">Ducimus qui blanditiis</a></li>
                            <li><a href="#">Praesentium voluptatum deleniti atque</a></li>
                        </ul>
                        <!-- <p class="img-indent-bot">This <a class="link" target="_blank" href="#">Laura &amp; John Template</a> goes with two packages – with PSD source files and without them. PSD source files are avail able for free for the registered members of TemplatesMonster.com.</p> -->
                        <a class="link-1" href="<?php echo ($ao["url"]); ?>">About Our Wedding</a>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </article>
            <article class="col-2-3">
            	<div class="wrap-col indent-left">
                    <h3 class="indent-bot2">爱,正在进行...</h3>
                    <div class="wrapper p3">
                        <figure class="col-1-4"><div class="wrap-col">
                            <p class="p1"><a href="#"><img class="img-border1" src="/love/Application/Home/Static/images/page1-img1.jpg" alt=""></a><span class="clear"></span></p>
                            <span class="text-1">John Daniels</span>
                        </div></figure>
                        <div class="col-3-4"> <div class="wrap-col">
                            <blockquote class="q1">	
                                <p class="p2">&quot;...sed ut perspiciatis unde omnis iste natus error volup tatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
Veritatis et quasi architecto beatae vitae dicta sunt expli cabo. Nemo enim ipsam voluptatem...&quot;
                            </blockquote>
                        </div></div>
                    </div>
                    <div class="wrapper img-indent-bot">
                        <figure class="col-1-4" style="float: right;"><div class="wrap-col">
                            <p class="p1"><a href="#"><img class="img-border1" src="/love/Application/Home/Static/images/page1-img2.jpg" alt=""></a><span class="clear"></span></p>
                            <span class="text-1">Laura Daniels</span>
                        </div></figure>
                        <div class="col-3-4" style="float: right;"><div class="wrap-col">
                            <blockquote class="q2">
                            	 <p>&quot;Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.</p>
                                 Qui ratione voluptatem sequi nesciunt neque poruisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit.&quot;
                            </blockquote>
                        </div></div>
                    </div>
                    <div class="wrapper p3">
                        <figure class="col-1-4"><div class="wrap-col">
                            <p class="p1"><a href="#"><img class="img-border1" src="/love/Application/Home/Static/images/page1-img1.jpg" alt=""></a><span class="clear"></span></p>
                            <span class="text-1">John Daniels</span>
                        </div></figure>
                        <div class="col-3-4"> <div class="wrap-col">
                            <blockquote class="q1"> 
                                <p class="p2">&quot;...sed ut perspiciatis unde omnis iste natus error volup tatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
Veritatis et quasi architecto beatae vitae dicta sunt expli cabo. Nemo enim ipsam voluptatem...&quot;
                            </blockquote>
                        </div></div>
                    </div>
                    <div class="wrapper img-indent-bot">
                        <figure class="col-1-4" style="float: right;"><div class="wrap-col">
                            <p class="p1"><a href="#"><img class="img-border1" src="/love/Application/Home/Static/images/page1-img2.jpg" alt=""></a><span class="clear"></span></p>
                            <span class="text-1">Laura Daniels</span>
                        </div></figure>
                        <div class="col-3-4" style="float: right;"><div class="wrap-col">
                            <blockquote class="q2">
                                 <p>&quot;Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.</p>
                                 Qui ratione voluptatem sequi nesciunt neque poruisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit.&quot;
                            </blockquote>
                        </div></div>
                    </div>
                    <a class="link-1" href="#">Read More</a>
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
                    <a rel="nofollow" class="link" target="_blank" href="http://www.zerotheme.com/">Free Html5 Templates</a> by <a rel="nofollow" class="link" target="_blank" href="http://www.templatemonster.com/">TemplateMonster</a> and <a rel="nofollow" class="link" target="_blank" href="http://www.baidu.com/">Zerotheme</a>
                </span>
            </div></div>
        </div>
    </footer>
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuint',
				preset:'slideDown',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:true,
				pagNums:false
			});
		});
    </script>
</body>
</html>