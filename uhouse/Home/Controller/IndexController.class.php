<?php

//命名空间
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

    function index(){
        /*
        $condo=new \Model\rent_condoModel();
        $info=$condo->select();
        $this -> assign('info',$info);
        */
        $this -> display();

    }       
}
