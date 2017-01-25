<?php

//命名空间
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
    	/*$condo=new \Model\GoodsModel();

    	if(!empty(_post)){

    	}else{
        $info = $condo -> select();
        }*/

        //$this -> assign('info',$info);
        $condo=new \Model\Condo_listModel();
        $info=$condo->select();
        $this -> assign('info',$info);
        $this -> display();
    }
}
