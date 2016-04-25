<?php
namespace Home\Model;
use Think\Model;
class IndexModel extends Model{
	public function getNavigate(){
		return M('love_navigate')->where(array('status'=>1))->select();
	}

	/**
	 * 获取轮播图
	 */
	public function getpics(){
		$data=M("love_changepic")->where(array('status'=>1))->select();
		if($data && is_array($data)){
			foreach ($data as $key => $value) {
				$value['picpath']=get_pic_path($value['picid']);
				$data[$key]=$value;
			}
		}

		return $data;
	}
}