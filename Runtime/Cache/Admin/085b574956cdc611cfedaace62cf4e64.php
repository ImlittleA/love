<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo ($meta_title); ?>|<?php echo L('_SNS_BACKSTAGE_MANAGE_');?></title>
    <link href="/love/Public/favicon.ico" type="image/x-icon" rel="shortcut icon">


    <!--zui-->
    <link rel="stylesheet" type="text/css" href="/love/Application/Admin/Static/zui/css/zui.css" media="all">
    <link rel="stylesheet" type="text/css" href="/love/Application/Admin/Static/css/admin.css" media="all">
    <link rel="stylesheet" type="text/css" href="/love/Application/Admin/Static/css/ext.css" media="all">
    <!--zui end-->

    <!--
        <link rel="stylesheet" type="text/css" href="/love/Application/Admin/Static/css/base.css" media="all">
        <link rel="stylesheet" type="text/css" href="/love/Application/Admin/Static/css/common.css" media="all"-->
    <link rel="stylesheet" type="text/css" href="/love/Application/Admin/Static/css/module.css">
    <link rel="stylesheet" type="text/css" href="/love/Application/Admin/Static/css/style.css" media="all">
    <!--<link rel="stylesheet" type="text/css" href="/love/Application/Admin/Static/css/<?php echo (C("COLOR_STYLE")); ?>.css" media="all">-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/love/Public/static/jquery-1.10.2.min.js"></script>
    <![endif]--><!--[if gte IE 9]><!-->
    <script type="text/javascript" src="/love/Public/js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/love/Application/Admin/Static/js/jquery.mousewheel.js"></script>
    <!--<![endif]-->
    
    <script type="text/javascript">
        var ThinkPHP = window.Think = {
            "ROOT": "/love", //当前网站地址
            "APP": "/love/admin.php?s=", //当前项目地址
            "PUBLIC": "/love/Public", //项目公共目录地址
            "DEEP": "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINF<?php echo L("_O_SEGMENTATION_");?>
            "MODEL": ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
            "VAR": ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"],
            'URL_MODEL': "<?php echo C('URL_MODEL');?>"
        }
        var _ROOT_="/love";
    </script>
</head>
<body>
<style>

</style>
<div class="panel-header">
    <nav class="navbar navbar-inverse admin-bar" role="navigation">
        <div class="navbar-header">
            <a href="<?php echo U('Index/index');?>" class="navbar-brand">
                OpenSNS</a>
        </div>
        <div class="collapse navbar-collapse navbar-collapse-example">
            <ul id="nav_bar" class="nav navbar-nav">
                <?php if(is_array($__MENU__["main"])): $i = 0; $__LIST__ = $__MENU__["main"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i; if(($menu["hide"]) != "1"): ?><li data-id="<?php echo ($menu["id"]); ?>" class="<?php echo ((isset($menu["class"]) && ($menu["class"] !== ""))?($menu["class"]):''); ?>"><a href="<?php echo (u($menu["url"])); ?>">
                            <?php if(($menu["icon"]) != ""): ?><i class="icon-<?php echo ($menu["icon"]); ?>"></i>&nbsp;<?php endif; ?>
                            <?php echo ($menu["title"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://os.opensns.cn/index.php?s=question/index/index.html" target="_blank"><i class="icon-question"></i> <?php echo L('_Q_AND_A_');?></a></li>
                <li><a href="http://os.opensns.cn/index.php?s=book/index/index.html" target="_blank"><i class="icon-book"></i> <?php echo L('_DOCUMENT_');?></a></li>
                <li><a href="javascript:;"  onclick="clear_cache()"><i class="icon-trash"></i> <?php echo L('_CACHE_CLEAR_');?></a></li>
                <li><a target="_blank" href="<?php echo U('Home/Index/index');?>"><i class="icon-copy"></i> <?php echo L('_FORESTAGE_OPEN_');?></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i>
                        <?php echo session('user_auth.username');?> <b
                                class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo U('User/updatePassword');?>"><?php echo L('_PASSWORD_CHANGE_');?></a></li>
                        <li><a href="<?php echo U('User/updateNickname');?>"><?php echo L('_NICKNAME_CHANGE_');?></a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo U('Public/logout');?>"><?php echo L('_EXIT_');?></a></li>
                    </ul>
                </li>
                <script>
                    function clear_cache() {
                        var msg = new $.zui.Messager("<?php echo L('_CACHE_CLEAR_SUCCESS_'); echo L('_PERIOD_');?>", {placement: 'bottom'});
                        $.get('/love/cc.php');
                        msg.show()
                    }
                </script>
            </ul>
        </div>
    </nav>

    <div class="admin-title">

    </div>

</div>
<div class="panel-menu">
    <ul class="nav nav-primary nav-stacked">

        <?php if(is_array($__MODULE_MENU__)): $i = 0; $__LIST__ = $__MODULE_MENU__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($v['is_setup'] AND $v['admin_entry']): ?><li>
                    <a  href="<?php echo U($v['admin_entry']);?>" title="<?php echo (text($v["alias"])); ?>" class="text-ellipsis text-center">
                        <i class="icon-<?php echo ($v['icon']); ?>"></i><br/><?php echo ($v["alias"]); ?>
                    </a>
                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>

    </ul>

</div>

<div class="panel-main" style="float:left;">

    <div class="">


    <div class="clearfix " style="">
        <?php if(!empty($__MENU__["child"])): ?><div class="sub_menu_wrapper" style="background: rgb(245, 246, 247); bottom: -10px;top: 0;position: absolute;width: 180px;overflow: auto">
                <div>
                    <nav id="sub_menu" class="menu" data-toggle="menu">
                        <ul class="nav nav-primary">
                            
                                <!--     <?php if(!empty($_extra_menu)): ?>
                                         <?php echo extra_menu($_extra_menu,$__MENU__); endif; ?>-->
                                <?php if(is_array($__MENU__["child"])): $i = 0; $__LIST__ = $__MENU__["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;?><!-- <?php echo L("_SUB_NAVIGATION_");?>-->
                                    <?php if(!empty($sub_menu)): ?><li class="show">
                                            <a href="#">
                                                <?php if(!empty($key)): echo ($key); endif; ?>
                                            </a>
                                            <ul class="nav">
                                                <?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li>
                                                        <a href="<?php echo (u($menu["url"])); ?>"><?php echo ($menu["title"]); ?></a>
                                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </ul>
                                        </li><?php endif; ?>
                                    <!-- /<?php echo L("_SUB_NAVIGATION_");?>--><?php endforeach; endif; else: echo "" ;endif; ?>

                            

                        </ul>
                    </nav>
                </div>
            </div><?php endif; ?>


        <?php if(!empty($__MENU__["child"])): $col=10; ?>
            <?php else: ?>
            <?php $col=12; endif; ?>
        <div id="main-content" class="" style="padding:10px;padding-left:0;padding-bottom:10px;left: 180px;position:absolute;right: 0;bottom: 0;top: 0;overflow: auto">
           <?php if(($update) == "1"): ?><div id="top-alert" class="alert alert-success alert-dismissable" style="position: absolute;left: 50%;margin-left: -150px;width: 300px;box-shadow: rgba(95, 95, 95, 0.4) 3px 3px 3px;z-index:999">
                   <i class="icon-ok-sign" style="font-size: 28px"></i>  &nbsp;&nbsp; <?php echo L('_VERSION_UPDATE_',array('href'=> '<a class="alert-link" href="'.U('Cloud/update').'">' ));?></a>
                   <button class="close fixed" style="margin-top: 4px;">&times;</button>
               </div><?php endif; ?>

            <div id="main" style="overflow-y:auto;overflow-x:hidden;">
                
                    <!-- nav -->
                    <?php if(!empty($_show_nav)): ?><div class="breadcrumb">
                            <span><?php echo L('_YOUR_POSITION_'); echo L('_COLON_');?></span>
                            <?php $i = '1'; ?>
                            <?php if(is_array($_nav)): foreach($_nav as $k=>$v): if($i == count($_nav)): ?><span><?php echo ($v); ?></span>
                                    <?php else: ?>
                                    <span><a href="<?php echo ($k); ?>"><?php echo ($v); ?></a>&gt;</span><?php endif; ?>
                                <?php $i = $i+1; endforeach; endif; ?>
                        </div><?php endif; ?>
                    <!-- nav -->
                

                <div class="admin-main-container">
                    
    <!--   <div class="with-padding-lg">
           <div class="col-xs-6">
               <div class="alert alert-info with-icon">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                   <div class="content"><strong>Hi!</strong><?php echo L("_THE_MAIN_MODULE_HAS_A_NEW_UPDATE_");?></div>
               </div>
           </div>
          <div class="col-xs-6">
              <div class="alert alert-info with-icon">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <div class="content"><strong>Hi!</strong><?php echo L("_MICROBLOGGING_MODULE_HAS_A_NEW_UPDATE_CONTENT_");?></div>
              </div>
          </div>
       </div>-->
    <div class="with-padding clearfix text-center">
        <ul id="myTab" class="  nav nav-justified nav-pills  " style="width: 250px;display: inline-block;font-size: 16px">
            <li class="active">
                <a href="#tab1" data-toggle="tab"><?php echo L('_SITE_STATISTICS_');?></a>
            </li>
            <li>
                <a href="#tab2" data-toggle="tab"><?php echo L('_SYSTEM_INFO_');?></a>
            </li>
        </ul>
    </div>

    <div class="tab-content">
    <div class="tab-pane in active" id="tab1">
        <div class="with-padding-lg">
            <div class="count clearfix">
                <div class="col-xs-4 text-center">
                    <a href="<?php echo U('action/actionlog');?>" class="with-padding-lg bg-special">
                        <i class="icon-tasks"></i>
                        <?php echo ($count["today_action_log"]); ?>
                        <br/>
                        <?php echo L('_USER_ACTION_TODAY_');?>
                    </a>
                </div>
                <div class="col-xs-4 text-center">
                    <a class="with-padding-lg bg-info" href="<?php echo U('user/index');?>"><i class="icon-user"></i>
                        <?php echo ($count["today_user"]); ?> <br/>
                        <?php echo L('_USER_INCREASE_TODAY_');?></a>
                </div>
                <div class="col-xs-4 text-center">
                    <a class="with-padding-lg bg-danger" style="background: rgb(96, 210, 149)" href="<?php echo U('user/index');?>">
                        <i class="icon-group">
                        </i>
                        <?php echo ($count["total_user"]); ?>
                        <br/>
                        <?php echo L('_USER_COUNT_');?>
                    </a>
                </div>
            </div>
        </div>

        <div class="with-padding-lg" style="position: relative">
            <button class="btn  pull-right" data-toggle="modal" data-target="#settingCount"
                    style="position: absolute;right: 15px;z-index: 999">
                <i class="icon-cog"></i>
                <?php echo L('_SETTINGS_');?>
            </button>
            <div id="myChart" height="400"></div>
        </div>

    </div>
    <div class="tab-pane" id="tab2">

        <div class="with-padding-lg">
            <div class="count clearfix">
                <div class="col-xs-4 text-center">
                    <a href="http://os.opensns.cn/question" class="with-padding-lg bg-special" target="_blank">
                       <i class="icon-question"></i> <?php echo L('_Q_AND_A_');?>
                    </a>
                </div>
                <div class="col-xs-4 text-center">
                    <a class="with-padding-lg bg-info" target="_blank" href="http://os.opensns.cn/book/index/index.html">
                        <i class="icon-book"></i>  <?php echo L('_DOCUMENT_CENTER_');?></a>
                </div>
                <div class="col-xs-4 text-center">
                    <a class="with-padding-lg bg-danger" target="_blank" style="background: rgb(96, 210, 149)" href="http://os.opensns.cn/">
                        <i class="icon-chrome">
                        </i>

                        <?php echo L('_OFFICIAL_GROUP_');?>
                    </a>
                </div>
            </div>
        </div>
        <div class="with-padding-lg">
            <div class="" style="width:700px;clear: both;margin: auto">
                <div class="hd cf">
                    <h5><?php echo ($addons_config["title"]); ?></h5>

                    <div class="title-opt">
                    </div>
                </div>
                <div class="bd">
                    <div class="">
                        <table class="table table-bordered table-striped ">
                            <tr>
                                <th style="width: 200px"><?php echo L('_SERVER_OS_');?></th>
                                <td><?php echo (PHP_OS); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo L('_THINKPHP_VERSION_');?></th>
                                <td><?php echo (THINK_VERSION); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo L('_RUNTIME_ENVIR_');?></th>
                                <td><?php echo ($_SERVER['SERVER_SOFTWARE']); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo L('_MYSQL_VERSION_');?></th>
                                <?php $system_info_mysql = M()->query("select version() as v;"); ?>
                                <td><?php echo ($system_info_mysql["0"]["v"]); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo L('_LIMIT_UPLOAD_');?></th>
                                <td><?php echo ini_get('upload_max_filesize');?>

                                    <a href="http://os.opensns.cn/book/index/read/section_id/93.html" target="_blank"><?php echo L('_MODIFY_HOW_TO_');?></a></td>
                            </tr>
                            <tr>
                                <th><?php echo L('_OS_VERSION_');?></th>
                                <td><?php echo file_get_contents('./Data/version.ini');?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="tab-pane" id="tab3">

    </div>
    <div class="tab-pane" id="tab4">

    </div>
</div>


    <div class="clearfix">
        <div class="col-xs-4">

        </div>
        <div class="col-xs-4">

        </div>
        <div class="col-xs-4">

        </div>

    </div>
    <script>
        $('#main-content').css('left', 0);
        $(function () {
            $('#myChart').highcharts({
                chart: {
                    type: "spline",
                    style: {
                        fontFamily: '"Microsoft Yahei", "宋体"'
                    }
                },
                title: {
                    text: "<?php echo L('_USER_INCREASE_RECENT_',array('count_day'=>$count['count_day']));?>",
                    x: -20 //center
                },
                xAxis: {
                    categories: eval('<?php echo ($count["last_day"]["days"]); ?>'),
                    title: {
                        text: "<?php echo L('_MEMBER_REG_TODAY_');?>",
                        enabled: false
                    }
                },
                yAxis: {
                    title: ''
                },
                legend: {
                    layout: 'vertical',
                    verticalAlign: 'middle',
                    borderWidth: 0,
                    enabled: false
                },
                series: [{
                    name: "<?php echo L('_MEMBER_REG_TODAY_');?>",
                    data: eval('<?php echo ($count["last_day"]["data"]); ?>'),
                    enable: true
                }], credits: {enabled: false}
            });
        });


    </script>


                </div>

            </div>
        </div>
    </div>
    </div>
</div>



<?php if($report){ ?>
<div  class="report_feedback" title="<?php echo L('_REPORT_EXPERIENCE_PLEASE_FILL_');?>" data-toggle="modal" data-target="#myModal">
    <div class="report_icon" ></div>
    <span class="label label-badge label-danger report_point">1</span>
</div>




<div class="modal fade in" id="myModal" aria-hidden="false"  style="display: none">
    <div class="modal-dialog" >
        <div class="modal-content">
            <form class="report_form"  action="<?php echo U('admin/admin/submitReport');?>" method="post">


            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only"><?php echo L('_CLOSE_');?></span></button>
                <h4 class="modal-title"><?php echo L('_REPORT_EXPERIENCE_');?></h4>
            </div>

            <div class="modal-body">

                    <div class="row">
                        <!-- 帖子分类 -->
                        <div class="col-sm-12">
<div><?php echo L('_THANKS_HOPE_');?></div>

                                <label class="item-label"><?php echo L('_MOOD_MY_');?></label>
                            <div>
                                <select name="q1" class="report-select" style="width:400px;">
                                    <option value="0"><?php echo L('_ELECT_PLEASE_');?></option>
                                    <option><?php echo L('_HAPPY_');?></option>
                                    <option><?php echo L('_AGONY_');?></option>
                                    <option><?php echo L('_LOVE_');?></option>
                                    <option><?php echo L('_EXPECT_');?></option>
                                </select>
                        </div>

                                <label class="item-label"><?php echo L('_LOVE_MY_OPTION_');?></label>
                            <div>
                                <select name="q2" class="report-select" style="width:400px;">
                                    <option value="0"><?php echo L('_ELECT_PLEASE_');?></option>
                                    <?php if(is_array($this_update)): $i = 0; $__LIST__ = $this_update;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?><option value="<?php echo (htmlspecialchars($option)); ?>"><?php echo (htmlspecialchars($option)); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>

                                <label class="item-label"><?php echo L('_HATE_MY_OPTION_');?>
                                </label>
                            <div>
                                <select name="q3" class="report-select" style="width:400px;">
                                    <option value="0"><?php echo L('_ELECT_PLEASE_');?></option>
                                    <?php if(is_array($this_update)): $i = 0; $__LIST__ = $this_update;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?><option value="<?php echo (htmlspecialchars($option)); ?>"><?php echo (htmlspecialchars($option)); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>


                                <label class="item-label"><?php echo L('_EXPECTATION__MY_OPTION_');?>
                                </label>
                            <div>
                                <select name="q4" class="report-select" style="width:400px;">
                                    <option value="0"><?php echo L('_ELECT_PLEASE_');?></option>
                                    <?php if(is_array($future_update)): $i = 0; $__LIST__ = $future_update;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$option): $mod = ($i % 2 );++$i;?><option value="<?php echo (htmlspecialchars($option)); ?>"><?php echo (htmlspecialchars($option)); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                    </div>
                    </div>
            </div>
            <div class="modal-footer">
                <?php if(strval($report['url'])!=''){ ?>
                <a class="pull-left" href="<?php echo ($report['url']); ?>" target="_blank" ><?php echo L('_UPDATE_LOOK_');?></a>
                <?php } ?>
                <button type="submit" class="btn ajax-post" target-form="report_form"><?php echo L('_CONFIRM_');?></button>
            </div>

            </form>
        </div>
    </div>
</div>



<?php } ?>


<script>
    $(function () {
        var config = {
            '.chosen-select'           : {search_contains: true, drop_width: 400,no_results_text:"{:L('_OPTION_MATCHED_NONE_')}"},
            '.report-select'           : {search_contains: true, width: '400px',no_results_text:"{:L('_OPTION_MATCHED_NONE_')}"}
        };
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }

    });
</script>


<script src="/love/Application/Admin/Static/zui/lib/chosen/chosen.js"></script>
<link href="/love/Application/Admin/Static/zui/lib/chosen/chosen.css" type="text/css" rel="stylesheet">




<!-- <?php echo L("_CONTENT_AREA_");?>-->

<!-- /<?php echo L("_CONTENT_AREA_");?>-->
<script type="text/javascript">
    (function () {
        var ThinkPHP = window.Think = {
            "ROOT": "/love", //当前网站地址
            "APP": "/love/admin.php?s=", //当前项目地址
            "PUBLIC": "/love/Public", //项目公共目录地址
            "DEEP": "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
            "MODEL": ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
            "VAR": ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"],
            'URL_MODEL': "<?php echo C('URL_MODEL');?>"
        }
    })();
</script>
<script type="text/javascript" src="/love/Public/static/think.js"></script>

<!--zui-->
<script type="text/javascript" src="/love/Application/Admin/Static/js/common.js"></script>
<script type="text/javascript" src="/love/Application/Admin/Static/js/com/com.toast.class.js"></script>
<script type="text/javascript" src="/love/Application/Admin/Static/zui/js/zui.js"></script>
<script type="text/javascript" src="/love/Application/Admin/Static/zui/lib/migrate/migrate1.2.js"></script>
<!--zui end-->
<link rel="stylesheet" type="text/css" href="/love/Application/Admin/Static/js/kanban/kanban.css" media="all">
<script type="text/javascript" src="/love/Application/Admin/Static/js/kanban/kanban.js"></script>
<script type="text/javascript">
    +function () {
        var $window = $(window), $subnav = $("#subnav"), url;
        $window.resize(function () {
            $("#main").css("min-height", $window.height() - 130);
        }).resize();

        // 导航栏超出窗口高度后的模拟滚动条
        var sHeight = $(".sidebar").height();
        var subHeight = $(".subnav").height();
        var diff = subHeight - sHeight; //250
        var sub = $(".subnav");
        if (diff > 0) {
            $(window).mousewheel(function (event, delta) {
                if (delta > 0) {
                    if (parseInt(sub.css('marginTop')) > -10) {
                        sub.css('marginTop', '0px');
                    } else {
                        sub.css('marginTop', '+=' + 10);
                    }
                } else {
                    if (parseInt(sub.css('marginTop')) < '-' + (diff - 10)) {
                        sub.css('marginTop', '-' + (diff - 10));
                    } else {
                        sub.css('marginTop', '-=' + 10);
                    }
                }
            });
        }
    }();
    highlight_subnav("<?php echo U('Admin'.'/'.CONTROLLER_NAME.'/'.ACTION_NAME,$_GET);?>")
</script>

    <script type="text/javascript" src="/love/Application/Admin/Static/js/highcharts.js"></script>


    <div class="modal fade" id="settingCount">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                            class="sr-only"><?php echo L('_CLOSE_');?></span></button>
                    <h4 class="modal-title"><?php echo L('_STATISTICS_SET_');?></h4>
                </div>
                <div class="modal-body">
                    <div class="with-padding">
                        <label><?php echo L('_DISPLAY_DAYS_DEFAULT_');?> </label><input class="form-control" name="count_day" value="<?php echo ($count["count_day"]); ?>">

                    </div>


                </div>
                <div class="modal-footer">
                    <button class="btn " data-role="saveCountSetting">
                        <i class="icon-ok"></i> <?php echo L('_SAVE_');?>
                    </button>
                    <button class="btn " data-dismiss="modal">
                        <i class="icon-remove"></i> <?php echo L('_CANCEL_');?>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('[data-role=saveCountSetting]').click(function () {
            $.post("/love/admin.php?s=/index/index.html", {count_day: $('[name=count_day]').val()}, function (msg) {
                handleAjax(msg);
            });
        })
    </script>

</body>
</html>