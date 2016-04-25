<?php
// +----------------------------------------------------------------------
// | Author: 王凤建 <wangfengjian8@gmail.com> 
// +----------------------------------------------------------------------

namespace Home\Controller;

use Think\Controller;


/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends Controller
{
	protected function _initialize()
    {

        /*读取站点配置*/
        $config = api('Config/lists');
        C($config); //添加配置

        if (!C('WEB_SITE_CLOSE')) {
            $this->error(L('_ERROR_WEBSITE_CLOSED_'));
        }
    }

	public function index(){
		$title=D('index')->getNavigate();
		$changepics=D('index')->getpics();
		$this->assign('pics',$changepics);
		$this->assign('title',$title);
		$this->assign('newdata',$newdata);
		$this->display();
	}
}