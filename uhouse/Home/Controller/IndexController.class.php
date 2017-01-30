<?php

//命名空间
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
         //头部
    function header(){
        $this -> display();
    }
    //左侧
    function section(){
        $this -> display();
    }
    //右侧
    function aside(){
        //获得当前请求的全部常量信息
        //dump(get_defined_constants(true));
        $this -> display();
    }
    	/*$condo=new \Model\GoodsModel();

    	if(!empty(_post)){

    	}else{
        $info = $condo -> select();
        }*/
    function index(){
        //$this -> assign('info',$info);
        
        $condo=new \Model\Condo_listModel();
        $info=$condo->select();
        $this -> assign('info',$info);
        $this -> display();
        
    }

    function calculator(){
        $this->display();
    }
}
