<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>表白网 - 做最好的表白网站</title>
<meta name="description" content="表白网 - 做最专业的在线表白网站,成立于2016年,拥有大量的浪漫表白模板,给他/她不一样的浪漫与惊喜,我们承诺:永久保存你们的表白信息">
<link href="/love/Public/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/love/Public/js/in-tag.js"></script>
<script type="text/javascript" src="/love/Public/js/jquery.js"></script>
<script type="text/javascript">
$(function () {
	
	imgZoomInit()//模块初始化
})


/*
* 图片放大展示
* 2015-01-04
* nizilam
*/
function imgZoomInit(){
	$('.piclist li.pic').append(function(){
		ht = $(this).find('.in').html();
		return "<div class='original'>"+ht+"</div>";
	});
	
	$(".piclist li.pic .in img").each(function(i){
		var img = $(this);
		var realWidth ;//原始宽度
		var realHeight ;//原始高度
		var vs ;//图片宽高比
		
		realWidth = this.width;
		realHeight = this.height;
		vs = realWidth/realHeight;
			
		//缩略图比例230:142(约等于1.62)
		if(vs>=1.62)else
		
		//图片放大水平垂直居中显示
		if(vs>=1),
				left:'50%'
			})
		}else,
				top:'50%'
			});
			$(img).parent().parent().parent().find('.original b').css('display','block')
		}		
	});

	
	$('.piclist li.pic').hover(function(){
			$(this).addClass('on');
		},function(){
			$(this).removeClass('on');	
	})
	
	$(".piclist ul li:nth-child(4n)").addClass('r');
}


</script>
<style>
 .snow-container{position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 100001;}
</style>

</head>
<body><div class="snow-container">
<script src="/love/Public/js/sn.js"></script></div>
<div class="biaobai">
<div class="gnav">
<div class="gnav-box">
<a href="http://www.biaobai.org/" class="gnav-logo">表白网</a>
<ul>
<li><a href="http://www.biaobai.org/" class="gaoliang">首页</a></li>
<?php if(is_array($title)): $k = 0; $__LIST__ = $title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ao): $mod = ($k % 2 );++$k;?><li><a href="<?php echo ($ao["url"]); ?>"><?php echo ($ao["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="gnav-dl"><a href="" class="gnav-login">登录</a><a href="" class="gnav-zhuce">注册</a></div>
</div>
</div>
<!--Mobile Menu-->
<!--Mobile Menu END-->
<!--TAG-->
<!--<script type="text/javascript" src="/snow.src.js"></script>-->
<div class="in-tag-box">
<div id="in-tag">	
  <a href='http://www.biaobai.org/love' target='_blank'>赵爱民❤刘晓燕</a>   <a href='http://www.biaobai.org/love' target='_blank'>涛哥❤秀秀</a>   <a href='http://www.biaobai.org/love' target='_blank'>王强❤李秀梅</a>   <a href='http://www.biaobai.org/love' target='_blank'>王涛love肖敏</a>   <a href='http://www.biaobai.org/love' target='_blank'>闵星♥小麦</a>   <a href='http://www.biaobai.org/love' target='_blank'>刘明ღ陈娟</a>  
</div>
</div>

<br>

<!--表白模板-->
<!--表白视频-->
<!--页面底部-->
<div class="copyright"> 
<!-- <embed src="http://www.c.com/love/Uploads/music/love.mp3" width="0" height="0" hidden="true" autostart="true" loop="flase"></embed> -->
<!-- <embed src='/index.swf?file=http://www.c.com/love/Uploads/music/love.mp3&width=900&songVolume=95&backColor=E8E8E8&frontColor=000000&autoStart=true&repeatPlay=false&showDownload=false' width='900' height='20' align="middle" quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash'></embed> -->
</div>


<!--菜单高亮--></div>
<script type="text/javascript">$(document).ready(function(){$(".gnav-box ul li a").each(function(){$this=$(this);if($this[0].href==String(window.location)){$this.addClass("gaoliang")}})});</script>
<div style="display:none"></div>
</body>
</html>