<?php
/**
 * Created by PhpStorm.
 * User: xiaoj
 * Date: 2017/1/10
 * Time: 10:26
 */

namespace app\index\controller;


class Ask
{
    public function index( $name) {

       $recv = 0;//Cell::bizSend($name);

       if($recv!= null) {
           return $recv;
       }

        return "error";
    }
}