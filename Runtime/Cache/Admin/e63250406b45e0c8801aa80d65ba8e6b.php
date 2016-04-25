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
    
	<link rel="stylesheet" href="/love/Application/Admin/Static/js/codemirror/codemirror.css">
	<link rel="stylesheet" href="/love/Application/Admin/Static/js/codemirror/theme/<?php echo C('codemirror_theme');?>.css">
	<style>
		.CodeMirror,#preview_window{
			width:700px;
			height:500px;
		}
		#preview_window.loading{
			background: url('/love/Public/static/thinkbox/skin/default/tips_loading.gif') no-repeat center;
		}

		#preview_window textarea{
			display: none;
		}
	</style>

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
                    
	<div class="main-title cf">
		<h2><?php echo L("_PLUG_IN_QUICK_CREATION_");?></h2>
	</div>
	<!-- 表单 -->

        <form id="form" action="<?php echo U('build');?>" method="post" class="form-horizontal doc-modal-form">
            <div class="with-padding">
            <div class="form-item">
                <label class="item-label"><span class="must">*</span><?php echo L("_IDENTIFICATION_NAME_");?><span class="check-tips"><?php echo L("_PLEASE_ENTER_THE_PLUGIN_IDENTIFIER_");?></span></label>
                <div class="controls">
                    <input type="text" class="text input-large form-control form-input-width" name="info[name]" value="Example">
                </div>
            </div>
            <div class="form-item">
                <label class="item-label"><?php echo L("_PLUGIN_NAME_");?><span class="check-tips"><?php echo L("_PLEASE_ENTER_THE_PLUGIN_NAME_");?></span></label>
                <div class="controls">
                    <input type="text" class="text input-large  form-control form-input-width" name="info[title]" value=<?php echo L("_COLUMN_WITH_DOUBLE_");?>>
                </div>
            </div>
            <div class="form-item">
                <label class="item-label"><?php echo L("_EDITION_");?><span class="check-tips"><?php echo L("_PLEASE_ENTER_THE_PLUGIN_VERSION_");?></span></label>
                <div class="controls">
                    <input type="text" class="text input-large  form-control form-input-width" name="info[version]" value="0.1">
                </div>
            </div>
            <div class="form-item">
                <label class="item-label"><?php echo L("_AUTHOR_");?><span class="check-tips"><?php echo L("_PLEASE_ENTER_THE_PLUGIN_AUTHOR_");?></span></label>
                <div class="controls">
                    <input type="text" class="text input-large  form-control form-input-width" name="info[author]" value=<?php echo L("_UNKNOWN_WITH_DOUBLE_");?>>
                </div>
            </div>
            <div class="form-item">
                <label class="item-label"><?php echo L("_DESCRIPTION_");?><span class="check-tips"><?php echo L("_PLEASE_ENTER_A_DESCRIPTION_");?></span></label>
                <div class="controls">
                    <label class="textarea input-large">
                        <textarea class=" form-text-area-size  form-control " name="info[description]"><?php echo L("_THIS_IS_A_TEMPORARY_DESCRIPTION_");?></textarea>
                    </label>
                </div>
            </div>
            <div class="form-item">
                <label class="item-label"><?php echo L("_IS_ENABLED_AFTER_INSTALLATION_");?></label>
                <div class="controls">
                    <label class=" checkbox-inline">
                        <input type="checkbox" name="info[status]" value="1" checked />
                    </label>
                </div>
            </div>
            <div class="form-item">
                <label class="item-label"><?php echo L("_WHETHER_YOU_NEED_TO_CONFIGURE_");?></label>
                <div class="controls">
                    <label class="checkbox checkbox-inline"><input type="checkbox" id="has_config" name="has_config" value="1" /></label>
                    <label class="textarea input-large has_config hidden">
                        <textarea class="textarea" name="config">
                            &lt;?php
                            return array(
                            'random'=>array(//配置在表单中的键名 ,这个会是config[random]
                            'title'=>'<?php echo L("_WHETHER_TO_OPEN_RANDOM_");?>:',//表单的文字
                            'type'=>'radio',		 //表单的类型：text、textarea、checkbox、radio、select等
                            'options'=>array(		 //select 和radion、checkbo<?php echo L("_X_SUB_OPTIONS_");?>
                            '1'=><?php echo L('_OPEN_WITH_SINGLE_');?>,		 //值=><?php echo L("_WRITTEN_WORDS_");?>
                            '0'=><?php echo L('_OFF_WITH_SINGLE_');?>,
                            ),
                            'value'=>'1',			 //表单的默认值
                            ),
                            );
                        </textarea>
                    </label>
                    <input type="text" class="text input-large has_config hidden" name="custom_config">
                    <span class="check-tips has_config hidden"><?php echo L("_CUSTOM_TEMPLATE_NOTE_"); echo L("_COLON_"); echo L("_THE_FORM_NAME_IN_A_CUSTOM_TEMPLATE_MUST_BE_CONFIG_");?>[name]<?php echo L("_THIS_THE_VALUE_OF_THE_SAVED_CONFIGURATION_");?>$data.config.name</span>
                </div>
            </div>
            <div class="form-item">
                <div class="controls">
                    <label class="item-label"><?php echo L("_DO_YOU_NEED_AN_EXTERNAL_ACCESS_");?></label>
                    <input type="checkbox" class="checkbox" name="has_outurl" value="1" />
                </div>
            </div>
            <div class="form-item">
                <label class="item-label"><?php echo L("_REALIZATION_OF_HOOK_METHOD_");?></label>
                <div class="controls">
                    <select class="select form-control form-text-area-size"  name="hook[]" size="10" multiple required>
                        <?php if(is_array($Hooks)): $i = 0; $__LIST__ = $Hooks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["name"]); ?>" title="<?php echo ($vo["description"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="form-item">
                <label class="item-label"><?php echo L("_DO_YOU_NEED_A_BACKGROUND_LIST_");?></label>
                <div class="controls">
                    <label class=" checkbox-inline">
                        <input type="checkbox" class=" " id="has_adminlist" name="has_adminlist" value="1" /><?php echo L("_CHECK_LIST_MENU_WHICH_IS_INSTALLED_IN_THE_EXTENSION_THE_LIST_OF_PLUGINS_");?>
                    </label>
                    <label class="textarea input-large has_adminlist hidden">
                        <textarea name="admin_list">
                            'model'=>'Example',		//要查的表
                            'fields'=>'*',			//要查的字段
                            'map'=>'',				//查询条件,<?php echo L("_IF_YOU_NEED_TO_BE_ABLE_TO_DYNAMICALLY_RESET_THIS_PROPERTY_IN_THE_CONSTRUCTION_METHOD_OF_THE_PLUGIN_CLASS_");?>
                            'order'=>'id desc',		//排序,
                            'listKey'=>array( 		//这里定义的是除了id序号外的表格里字段显示的表头名
                            <?php echo L('_FIELD_NAME_WITH_SINGLE_');?>=><?php echo L('_NAME_METER_DISPLAY_WITH_SINGLE_');?>
                            ),
                        </textarea>
                    </label>
                    <input type="text" class="text has_adminlist hidden" name="custom_adminlist">
                    <span class="check-tips block has_adminlist hidden"><?php echo L("_CUSTOM_TEMPLATE_NOTE_"); echo L("_COLON_"); echo L("_A_LIST_OF_VARIABLES_IN_A_CUSTOM_TEMPLATE_IS_");?>$_lis<?php echo L("_THIS_T_TRAVERSAL_CAN_BE_USED_AFTER_THE_LISTKEY_CAN_CONTROL_THE_METER_DISPLAY_");?>,<?php echo L("_CAN_ALSO_BE_COMPLETELY_HANDWRITTEN_PAGE_VARIABLE_");?>$_page</span>
                </div>
            </div>
            </div>
            <div class="form-item with-padding">
                <button class="btn btn-return" type="button" id="preview"><?php echo L("_PREVIEW_WITH_SPACE_");?></button>
                <button class="btn ajax-post_custom submit-btn" target-form="form-horizontal" id="submit"><?php echo L("_SURE_WITH_SPACE_");?></button>
                <button class="btn btn-return" onclick="javascript:history.back(-1);return false;"><?php echo L("_RETURN_WITH_SPACE_");?></button>
            </div>
        </form>



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

	<script type="text/javascript" src="/love/Application/Admin/Static/js/codemirror/codemirror.js"></script>
	<script type="text/javascript" src="/love/Application/Admin/Static/js/codemirror/xml.js"></script>
	<script type="text/javascript" src="/love/Application/Admin/Static/js/codemirror/javascript.js"></script>
	<script type="text/javascript" src="/love/Application/Admin/Static/js/codemirror/clike.js"></script>
	<script type="text/javascript" src="/love/Application/Admin/Static/js/codemirror/php.js"></script>

	<script type="text/javascript" src="/love/Public/static/thinkbox/jquery.thinkbox.js"></script>

	<script type="text/javascript">
		function bindShow(radio_bind, selectors){
			$(radio_bind).click(function(){
				$(selectors).toggleClass('hidden');
			})
		}

		//配置的动态
		bindShow('#has_config','.has_config');
		bindShow('#has_adminlist','.has_adminlist');

		$('#preview').click(function(){
			var preview_url = '<?php echo U("preview");?>';
			console.log($('#form').serialize());
			$.post(preview_url, $('#form').serialize(),function(data){
				$.thinkbox('<div id="preview_window" class="loading"><textarea></textarea></div>',{
					afterShow:function(){
						var codemirror_option = {
							lineNumbers   :true,
							matchBrackets :true,
							mode          :"application/x-httpd-php",
							indentUnit    :4,
							gutter        :true,
							fixedGutter   :true,
							indentWithTabs:true,
							readOnly	  :true,
							lineWrapping  :true,
							height		  :500,
							enterMode     :"keep",
							tabMode       :"shift",
							theme: "ambiance"
						};
						var preview_window = $("#preview_window").removeClass(".loading").find("textarea");
						var editor = CodeMirror.fromTextArea(preview_window[0], codemirror_option);
						editor.setValue(data);
						$(window).resize();
					},

					title:<?php echo L('_PREVIEW_PLUGIN_MASTER_FILE_WITH_SINGLE_');?>,
					unload: true,
					actions:['close'],
					drag:true
				});
			});
			return false;
		});

		$('.ajax-post_custom').click(function(){
	        var target,query,form;
	        var target_form = $(this).attr('target-form');
	        var check_url = '<?php echo U('checkForm');?>';
			$.ajax({
			   type: "POST",
			   url: check_url,
			   dataType: 'json',
			   async: false,
			   data: $('#form').serialize(),
			   success: function(data){
			    	if(data.status){
    			        if( ($(this).attr('type')=='submit') || (target = $(this).attr('href')) || (target = $(this).attr('url')) ){
				            form = $('.'+target_form);
				            if ( form.get(0).nodeName=='FORM' ){
				                target = form.get(0).action;
				                query = form.serialize();
				            }else if( form.get(0).nodeName=='INPUT' || form.get(0).nodeName=='SELECT' || form.get(0).nodeName=='TEXTAREA') {
				                query = form.serialize();
				            }else{
				                query = form.find('input,select,textarea').serialize();
				            }
				            $.post(target,query).success(function(data){
				                if (data.status==1) {
				                    if (data.url) {
				                        updateAlert(data.info + <?php echo L('_THE_PAGE_WILL_AUTOMATICALLY_JUMP_TO_WALK_THE_WALK_TODAY_WITH_SINGLE_');?>,'alert-success');
				                    }else{
				                        updateAlert(data.info + <?php echo L('_THE_PAGE_WILL_AUTOMATICALLY_REFRESH_THE_WALK_THE_WALK_TODAY_WITH_SINGLE_');?>);
				                    }
				                    setTimeout(function(){
				                        if (data.url) {
				                            location.href=data.url;
				                        }else{
				                        	location.reload();
				                        }
				                    },1500);
				                }else{
				                    updateAlert(data.info);
				                }
				            });
				        }
			    	}else{
			    		updateAlert(data.info);
					}
			   }
			});

	        return false;
	    });

	    //导航高亮
	    highlight_subnav('<?php echo U('Addons/index');?>');
	</script>



</body>
</html>